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

namespace OceanEngineSDK;

use Core\Exception\InvalidParamException;
use Core\Exception\OceanEngineException;
use Core\Http\HttpRequest;
use Core\Http\HttpResponse;
use Core\Profile\ChainProxy;
use Core\Profile\RequestInterface;

/**
 * SDK client.
 */
class OceanEngineClient
{
    private string $accessToken;

    private string $serverUrl;

    private string $boxUrl;

    private bool $isSandbox;

    /**
     * 顶层模块映射缓存（模块名 => 命名空间）.
     *
     * @var null|array<string, string>
     */
    private static ?array $moduleMap = null;

    /**
     * 构造函数，支持直接实例化.
     */
    public function __construct(
        string $accessToken,
        bool $isSandbox = false,
        ?string $serverUrl = null,
        ?string $boxUrl = null
    ) {
        $this->accessToken = $accessToken;
        $this->isSandbox = $isSandbox;
        $this->serverUrl = $serverUrl ?? 'https://api.oceanengine.com/open_api';
        $this->boxUrl = $boxUrl ?? 'https://api.oceanengine.com/open_api';
    }

    /**
     * 魔术方法，动态调用模块，返回模块实例.
     *
     * @throws \BadMethodCallException
     */
    public function __call(string $name, array $arguments)
    {
        $moduleMap = self::getModuleMap();

        if (! isset($moduleMap[$name])) {
            throw new \BadMethodCallException("未定义的方法 '{$name}'。");
        }

        return new ChainProxy($this, $moduleMap[$name]);
    }

    /**
     * 静态魔术方法，禁止调用（建议使用实例化调用模块）.
     */
    public static function __callStatic(string $name, array $arguments)
    {
        throw new \BadMethodCallException("请先实例化客户端再调用模块，例如：\$client = new OceanEngineClient(TOKEN); \$client->{$name}();");
    }

    /**
     * 执行 HTTP 请求并返回响应.
     *
     * @throws OceanEngineException
     */
    public function execute(RequestInterface $request, ?string $url = null): HttpResponse
    {
        $request->check();
        $params = $request->getParams();
        $headers = [
            'Access-Token' => $this->accessToken,
            'Content-Type' => $request->getContentType(),
        ];

        if ($url === null) {
            $url = $request->getUrl();
            if ($url === '') {
                throw new InvalidParamException('HTTP URL 不能为空');
            }
            if (! str_starts_with($url, 'http')) {
                $url = ($this->isSandbox ? $this->boxUrl : $this->serverUrl) . $url;
            }
        }

        if ($request->getMethod() === 'GET') {
            $url .= '?' . http_build_query($params);
            $params = null;
        }

        if (str_contains($request->getContentType(), 'json')) {
            $params = json_encode($params);
        }

        HttpRequest::$readTimeout = $request->getTimeout();

        return HttpRequest::curl($url, $request->getMethod(), $params, $headers);
    }

    /**
     * 备用调用模块接口方法（非静态）.
     */
    public function module(string $name)
    {
        $moduleMap = self::getModuleMap();

        if (! isset($moduleMap[$name])) {
            throw new \InvalidArgumentException("模块 {$name} 不存在。");
        }

        return new ChainProxy($this, $moduleMap[$name]);
    }

    public function Account(): ChainProxy
    {
        return $this->module('Account');
    }

    public function DataReports(): ChainProxy
    {
        return $this->module('DataReports');
    }

    public function EnterpriseAccount(): ChainProxy
    {
        return $this->module('EnterpriseAccount');
    }

    public function JuLiangAds(): ChainProxy
    {
        return $this->module('JuLiangAds');
    }

    public function JuLiangLocalPush(): ChainProxy
    {
        return $this->module('JuLiangLocalPush');
    }

    public function JuLiangQianChuan(): ChainProxy
    {
        return $this->module('JuLiangQianChuan');
    }

    public function JuLiangStarMap(): ChainProxy
    {
        return $this->module('JuLiangStarMap');
    }

    public function Materials(): ChainProxy
    {
        return $this->module('Materials');
    }

    public function Tools(): ChainProxy
    {
        return $this->module('Tools');
    }

    /**
     * 配置重试机制.
     */
    public function setRetryConfig(
        int $maxRetries = 3,
        int $retryDelay = 1000,
        array $retryableStatusCodes = [408, 429, 500, 502, 503, 504],
        bool $enableRetry = true,
        array $retryableBusinessCodes = [40100, 40110, 50000]
    ): self {
        HttpRequest::setRetryConfig(
            $maxRetries,
            $retryDelay,
            $retryableStatusCodes,
            $enableRetry,
            $retryableBusinessCodes
        );
        return $this;
    }

    /**
     * 设置重试开关.
     */
    public function setRetryEnabled(bool $enabled): self
    {
        HttpRequest::setRetryEnabled($enabled);
        return $this;
    }

    /**
     * @return array<string, string>
     */
    private static function getModuleMap(): array
    {
        if (self::$moduleMap !== null) {
            return self::$moduleMap;
        }

        $apiDir = dirname(__DIR__, 2) . '/Api';
        $moduleMap = [];

        $items = scandir($apiDir);
        if ($items === false) {
            self::$moduleMap = $moduleMap;
            return $moduleMap;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $moduleDir = $apiDir . '/' . $item;
            if (! is_dir($moduleDir)) {
                continue;
            }

            // 限制为合法模块名，避免特殊目录污染模块入口。
            if (! preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $item)) {
                continue;
            }

            $moduleMap[$item] = 'Api\\' . $item;
        }

        ksort($moduleMap);
        self::$moduleMap = $moduleMap;

        return $moduleMap;
    }
}
