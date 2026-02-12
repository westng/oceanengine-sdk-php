<?php

declare(strict_types=1);
/**
 * This file is part of Marketing PHP SDK.
 *
 * @link     https://github.com/westng/oceanengine-sdk-php
 * @document https://github.com/westng/oceanengine-sdk-php
 * @contact  westng
 * @license  https://github.com/westng/oceanengine-sdk-php/blob/main/LICENSE
 */

namespace Core\Http;

use Core\Exception\OceanEngineException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\NullLogger;

class HttpRequest
{
    public static int $connectTimeout = 20;

    public static int $readTimeout = 30;

    // Default retry settings (used when runtime config is not passed).
    public static bool $enableRetry = true;

    public static int $maxRetries = 3;

    public static int $retryDelay = 1000;

    public static array $retryableStatusCodes = [408, 429, 500, 502, 503, 504];

    public static array $retryableBusinessCodes = [40100, 40110, 50000];

    /**
     * @var array<string, Client>
     */
    private static array $clientPool = [];

    /**
     * 发送 HTTP 请求.
     *
     * @param array<string, mixed> $runtimeConfig
     */
    public static function curl(
        string $url,
        string $method = 'GET',
        null|array|string $postFields = null,
        array $headers = [],
        array $runtimeConfig = []
    ): HttpResponse {
        $config = self::normalizeRuntimeConfig($runtimeConfig);
        $client = self::getClient($config);
        $method = strtoupper($method);

        $options = [
            'headers' => $headers,
            'timeout' => $config['read_timeout'],
            'connect_timeout' => $config['connect_timeout'],
        ];

        if (in_array($method, ['POST', 'PUT', 'PATCH'], true) && $postFields !== null) {
            if (is_array($postFields)) {
                if (self::containsFile($postFields)) {
                    $options['multipart'] = self::buildMultipartData($postFields);
                } else {
                    $options['form_params'] = $postFields;
                }
            } else {
                $options['body'] = $postFields;
            }
        }

        try {
            $response = $client->request($method, $url, $options);

            $httpResponse = new HttpResponse();
            $httpResponse->setBody((string) $response->getBody());
            $httpResponse->setStatus($response->getStatusCode());

            return $httpResponse;
        } catch (RequestException $e) {
            throw new OceanEngineException(
                'HTTP Request Error: ' . $e->getMessage(),
                $e->getCode() ?: 400
            );
        }
    }

    /**
     * 构建 JSON 返回体（可用于测试或 API 输出）.
     */
    public static function renderJSON(?array $data = [], string $msg = 'ok', int $code = 200): string
    {
        return json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 设置默认重试配置（仅作用于未传 runtimeConfig 的请求）.
     */
    public static function setRetryConfig(
        int $maxRetries,
        int $retryDelay,
        array $retryableStatusCodes = [],
        bool $enableRetry = true,
        array $retryableBusinessCodes = []
    ): void {
        self::$enableRetry = $enableRetry;
        self::$maxRetries = $maxRetries;
        self::$retryDelay = $retryDelay;
        if ($retryableStatusCodes !== []) {
            self::$retryableStatusCodes = $retryableStatusCodes;
        }
        if ($retryableBusinessCodes !== []) {
            self::$retryableBusinessCodes = $retryableBusinessCodes;
        }

        self::$clientPool = [];
    }

    /**
     * 启用或禁用默认重试机制.
     */
    public static function setRetryEnabled(bool $enabled): void
    {
        self::$enableRetry = $enabled;
        self::$clientPool = [];
    }

    /**
     * @param array<string, mixed> $config
     */
    private static function getClient(array $config): Client
    {
        $cacheKey = md5((string) json_encode([
            'enable_retry' => $config['enable_retry'],
            'max_retries' => $config['max_retries'],
            'retry_delay' => $config['retry_delay'],
            'retryable_status_codes' => $config['retryable_status_codes'],
            'retryable_business_codes' => $config['retryable_business_codes'],
        ], JSON_UNESCAPED_SLASHES));

        if (! isset(self::$clientPool[$cacheKey])) {
            $stack = HandlerStack::create();

            if ($config['enable_retry']) {
                $stack->push(self::createRetryMiddleware($config));
            }

            $stack->push(self::createLogMiddleware());

            self::$clientPool[$cacheKey] = new Client([
                'handler' => $stack,
                'verify' => false,
            ]);
        }

        return self::$clientPool[$cacheKey];
    }

    /**
     * @param array<string, mixed> $config
     */
    private static function createRetryMiddleware(array $config): callable
    {
        return Middleware::retry(
            function (
                $retries,
                RequestInterface $request,
                ?ResponseInterface $response = null,
                ?\Exception $exception = null
            ) use ($config): bool {
                if ($retries >= $config['max_retries']) {
                    return false;
                }

                if ($exception instanceof ConnectException) {
                    return true;
                }

                if ($exception instanceof ServerException) {
                    return true;
                }

                if ($response && in_array($response->getStatusCode(), $config['retryable_status_codes'], true)) {
                    return true;
                }

                if ($response && $response->getStatusCode() === 200) {
                    try {
                        $body = (string) $response->getBody();
                        $data = json_decode($body, true);

                        if (is_array($data) && isset($data['code']) && is_numeric($data['code'])) {
                            $businessCode = (int) $data['code'];

                            if ($businessCode === 0) {
                                return false;
                            }

                            if (in_array($businessCode, $config['retryable_business_codes'], true)) {
                                return true;
                            }

                            if ($businessCode >= 50000 && $businessCode < 60000) {
                                return true;
                            }
                        }
                    } catch (\Exception $e) {
                        return false;
                    }
                }

                return false;
            },
            function ($retries) use ($config): int {
                return (int) ($config['retry_delay'] * pow(2, max(0, $retries - 1)));
            }
        );
    }

    /**
     * 创建日志中间件.
     */
    private static function createLogMiddleware(): callable
    {
        return Middleware::log(
            new NullLogger(),
            new MessageFormatter(
                "HTTP Request: {method} {uri}\n"
                . "HTTP Response: {code} {phrase}\n"
                . "Request Time: {req_time}s\n"
                . 'Response Time: {res_time}s'
            ),
            'info'
        );
    }

    /**
     * @param array<string, mixed> $runtimeConfig
     * @return array<string, mixed>
     */
    private static function normalizeRuntimeConfig(array $runtimeConfig): array
    {
        $readTimeout = self::$readTimeout;
        if (array_key_exists('read_timeout', $runtimeConfig)) {
            $readTimeout = max(1, (int) $runtimeConfig['read_timeout']);
        }

        $connectTimeout = self::$connectTimeout;
        if (array_key_exists('connect_timeout', $runtimeConfig)) {
            $connectTimeout = max(1, (int) $runtimeConfig['connect_timeout']);
        }

        $enableRetry = self::$enableRetry;
        if (array_key_exists('enable_retry', $runtimeConfig)) {
            $enableRetry = (bool) $runtimeConfig['enable_retry'];
        }

        $maxRetries = self::$maxRetries;
        if (array_key_exists('max_retries', $runtimeConfig)) {
            $maxRetries = max(0, (int) $runtimeConfig['max_retries']);
        }

        $retryDelay = self::$retryDelay;
        if (array_key_exists('retry_delay', $runtimeConfig)) {
            $retryDelay = max(0, (int) $runtimeConfig['retry_delay']);
        }

        return [
            'read_timeout' => $readTimeout,
            'connect_timeout' => $connectTimeout,
            'enable_retry' => $enableRetry,
            'max_retries' => $maxRetries,
            'retry_delay' => $retryDelay,
            'retryable_status_codes' => self::normalizeIntArray(
                $runtimeConfig['retryable_status_codes'] ?? null,
                self::$retryableStatusCodes
            ),
            'retryable_business_codes' => self::normalizeIntArray(
                $runtimeConfig['retryable_business_codes'] ?? null,
                self::$retryableBusinessCodes
            ),
        ];
    }

    /**
     * @param mixed $value
     * @param array<int, int> $default
     * @return array<int, int>
     */
    private static function normalizeIntArray($value, array $default): array
    {
        if (! is_array($value)) {
            return $default;
        }

        $normalized = [];
        foreach ($value as $item) {
            if (is_int($item) || (is_string($item) && is_numeric($item))) {
                $normalized[] = (int) $item;
            }
        }

        return $normalized === [] ? $default : array_values(array_unique($normalized));
    }

    /**
     * 构建multipart数据用于文件上传.
     */
    private static function buildMultipartData(array $data): array
    {
        $multipart = [];
        foreach ($data as $key => $value) {
            if (is_string($value) && str_starts_with($value, '@')) {
                $path = substr($value, 1);
                if (file_exists($path)) {
                    $multipart[] = [
                        'name' => $key,
                        'contents' => Utils::tryFopen($path, 'r'),
                        'filename' => basename($path),
                    ];
                }
            } else {
                $multipart[] = [
                    'name' => $key,
                    'contents' => $value,
                ];
            }
        }
        return $multipart;
    }

    /**
     * 是否包含文件上传.
     */
    private static function containsFile(array $data): bool
    {
        foreach ($data as $value) {
            if (is_string($value) && str_starts_with($value, '@')) {
                $path = substr($value, 1);
                if (file_exists($path)) {
                    return true;
                }
            }
        }
        return false;
    }
}
