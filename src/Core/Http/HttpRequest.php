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
    public static int $connectTimeout = 20; // 20 second

    public static int $readTimeout = 30; // 30 second

    /**
     * @param mixed|null $postFields
     * @param mixed|null $headers
     * @throws OceanEngineException
     */
    public static function curl(mixed $url, string $httpMethod = 'GET', mixed $postFields = null, mixed $headers = null): HttpResponse
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $httpMethod);
        if (defined('ENABLE_HTTP_PROXY') && defined('HTTP_PROXY_IP') && defined('HTTP_PROXY_PORT') && ENABLE_HTTP_PROXY) {
            curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_PROXY, HTTP_PROXY_IP);
            curl_setopt($ch, CURLOPT_PROXYPORT, HTTP_PROXY_PORT);
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, is_array($postFields) ? self::getPostHttpBody($postFields) : $postFields);

        if (self::$readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        }
        if (self::$connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        }

        // https request
        if (strlen($url) > 5 && stripos($url, 'https') === 0) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (is_array($headers) && 0 < count($headers)) {
            $httpHeaders = self::getHttpHeaders($headers);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }

        if (class_exists('\CURLFile')) {
            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
        } else {
            if (defined('CURLOPT_SAFE_UPLOAD')) {
                curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
            }
        }

        $httpResponse = new HttpResponse();
        $httpResponse->setBody(curl_exec($ch));
        $httpResponse->setStatus(curl_getinfo($ch, CURLINFO_HTTP_CODE));

        if (curl_errno($ch)) {
            throw new OceanEngineException(
                'Server unreachable: Errno: ' . curl_errno($ch) . ' ' . curl_error($ch),
                'SDK.ServerUnreachable'
            );
        }
        curl_close($ch);

        return $httpResponse;
    }

    public static function getPostHttpBody(mixed $postFildes): bool|string
    {
        $isMultipart = false;
        foreach ($postFildes as $apiParamKey => $apiParamValue) {
            if (str_starts_with($apiParamValue, '@')) {
                $isMultipart = true;
                if (class_exists('\CURLFile')) {
                    $postFildes[$apiParamKey] = new \CURLFile(substr($apiParamValue, 1));
                }
            }
        }
        return $isMultipart ? $postFildes : http_build_query($postFildes);
    }

    public static function getHttpHeaders(mixed $headers): array
    {
        $httpHeader = [];
        foreach ($headers as $key => $value) {
            $httpHeader[] = $key . ':' . $value;
        }
        return $httpHeader;
    }

    public static function renderJSON($data = [], $msg = 'ok', $code = 200): bool|string
    {
        return json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ]);
    }
}
