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

    // 重试配置
    public static bool $enableRetry = true; // 是否启用重试机制

    public static int $maxRetries = 3;

    public static int $retryDelay = 1000; // 毫秒

    public static array $retryableStatusCodes = [408, 429, 500, 502, 503, 504];

    public static array $retryableBusinessCodes = [40100, 40110, 50000]; // 可重试的业务错误码（频控错误码和5开头的都可以重试）

    private static ?Client $client = null;

    /**
     * 发送 HTTP 请求
     */
    public static function curl(
        string $url,
        string $method = 'GET',
        null|array|string $postFields = null,
        array $headers = []
    ): HttpResponse {
        $client = self::getClient();
        $method = strtoupper($method);

        // 准备请求选项
        $options = [
            'headers' => $headers,
        ];

        // 处理请求体
        if (in_array($method, ['POST', 'PUT', 'PATCH']) && $postFields !== null) {
            if (is_array($postFields)) {
                if (self::containsFile($postFields)) {
                    // 处理文件上传
                    $options['multipart'] = self::buildMultipartData($postFields);
                } else {
                    // 普通表单数据
                    $options['form_params'] = $postFields;
                }
            } else {
                // 原始字符串数据
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
     * 设置重试配置.
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
        if (! empty($retryableStatusCodes)) {
            self::$retryableStatusCodes = $retryableStatusCodes;
        }
        if (! empty($retryableBusinessCodes)) {
            self::$retryableBusinessCodes = $retryableBusinessCodes;
        }

        // 重置客户端以应用新配置
        self::$client = null;
    }

    /**
     * 启用或禁用重试机制.
     */
    public static function setRetryEnabled(bool $enabled): void
    {
        self::$enableRetry = $enabled;
        // 重置客户端以应用新配置
        self::$client = null;
    }

    /**
     * 获取Guzzle客户端实例，配置中间件.
     */
    private static function getClient(): Client
    {
        if (self::$client === null) {
            // 创建处理器栈
            $stack = HandlerStack::create();

            // 根据开关决定是否添加重试中间件
            if (self::$enableRetry) {
                $stack->push(self::createRetryMiddleware());
            }

            // 添加日志中间件
            $stack->push(self::createLogMiddleware());

            // 添加超时中间件
            $stack->push(self::createTimeoutMiddleware());

            self::$client = new Client([
                'handler' => $stack,
                'timeout' => self::$readTimeout,
                'connect_timeout' => self::$connectTimeout,
                'verify' => false, // 禁用SSL验证，保持与原curl实现一致
            ]);
        }
        return self::$client;
    }

    /**
     * 创建重试中间件.
     */
    private static function createRetryMiddleware(): callable
    {
        return Middleware::retry(
            function (
                $retries,
                RequestInterface $request,
                ?ResponseInterface $response = null,
                ?\Exception $exception = null
            ) {
                // 如果已经达到最大重试次数，不再重试
                if ($retries >= self::$maxRetries) {
                    return false;
                }

                // 检查是否应该重试
                if ($exception instanceof ConnectException) {
                    return true; // 连接超时，重试
                }

                if ($exception instanceof ServerException) {
                    return true; // 服务器错误，重试
                }

                // 检查HTTP状态码
                if ($response && in_array($response->getStatusCode(), self::$retryableStatusCodes)) {
                    return true; // 可重试的HTTP状态码
                }

                // 检查业务错误码（巨量引擎API特点：HTTP状态码200，但业务层面有错误码）
                if ($response && $response->getStatusCode() === 200) {
                    try {
                        $body = (string) $response->getBody();
                        $data = json_decode($body, true);

                        // 检查是否有业务错误码
                        if (is_array($data) && isset($data['code']) && is_numeric($data['code'])) {
                            $businessCode = (int) $data['code'];

                            // 成功码不重试
                            if ($businessCode === 0) {
                                return false;
                            }

                            // 检查是否是可重试的业务错误码（频控错误码）
                            if (in_array($businessCode, self::$retryableBusinessCodes)) {
                                return true; // 可重试的业务错误码
                            }

                            // 5开头的错误码都可以重试
                            if ($businessCode >= 50000 && $businessCode < 60000) {
                                return true; // 5开头的错误码重试
                            }
                        }
                    } catch (\Exception $e) {
                        // JSON解析失败，不重试
                        return false;
                    }
                }

                return false;
            },
            function ($retries) {
                // 指数退避策略
                $delay = self::$retryDelay * pow(2, $retries - 1);
                usleep($delay * 1000); // 转换为微秒
            }
        );
    }

    /**
     * 创建日志中间件.
     */
    private static function createLogMiddleware(): callable
    {
        return Middleware::log(
            new NullLogger(), // 使用空日志记录器，避免依赖
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
     * 创建超时中间件.
     */
    private static function createTimeoutMiddleware(): callable
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                // 设置请求超时
                $options['timeout'] = $options['timeout'] ?? self::$readTimeout;
                $options['connect_timeout'] = $options['connect_timeout'] ?? self::$connectTimeout;

                return $handler($request, $options);
            };
        };
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
