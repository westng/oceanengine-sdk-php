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

class HttpRequest
{
    public static int $connectTimeout = 20;

    public static int $readTimeout = 30;

    /**
     * 发送 HTTP 请求
     */
    public static function curl(
        string $url,
        string $method = 'GET',
        null|array|string $postFields = null,
        array $headers = []
    ): HttpResponse {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);

        // 设置 POST 数据
        if (in_array(strtoupper($method), ['POST', 'PUT', 'PATCH']) && $postFields !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($postFields)
                ? self::buildPostBody($postFields)
                : $postFields);
        }

        // 设置 HTTPS 请求参数
        if (str_starts_with($url, 'https://')) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        // 设置头部
        if (! empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, self::formatHeaders($headers));
        }

        // 执行请求
        $response = new HttpResponse();
        $body = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            throw new OceanEngineException(
                'Curl Error: ' . curl_errno($ch) . ' - ' . curl_error($ch),
                'SDK.CurlError'
            );
        }

        curl_close($ch);
        $response->setBody($body);
        $response->setStatus($httpCode);

        return $response;
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
     * 构建 POST 数据体.
     */
    private static function buildPostBody(array $data): array|string
    {
        foreach ($data as $key => $value) {
            if (is_string($value) && str_starts_with($value, '@')) {
                $path = substr($value, 1);
                if (file_exists($path)) {
                    $data[$key] = new \CURLFile($path);
                }
            }
        }

        return self::containsFile($data) ? $data : http_build_query($data);
    }

    /**
     * 是否包含文件上传.
     */
    private static function containsFile(array $data): bool
    {
        foreach ($data as $value) {
            if ($value instanceof \CURLFile) {
                return true;
            }
        }
        return false;
    }

    /**
     * 构建请求头.
     */
    private static function formatHeaders(array $headers): array
    {
        $formatted = [];
        foreach ($headers as $key => $value) {
            $formatted[] = "{$key}: {$value}";
        }
        return $formatted;
    }
}
