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

use Api\Account\Module as AccountModule;
use Api\DataReports\Module as DataReportsModule;
use Api\JuLiangAds\Module as JuLiangAdsModule;
use Api\JuLiangLocalPush\Module as JuLiangLocalPushModule;
use Api\JuLiangQianChuan\Module as JuLiangQianChuanModule;
use Api\JuLiangStarMap\Module as JuLiangStarMapModule;
use Api\Materials\Module as MaterialsModule;
use Api\Tools\Module as ToolsModule;
use Core\Exception\InvalidParamException;
use Core\Exception\OceanEngineException;
use Core\Http\HttpRequest;
use Core\Http\HttpResponse;
use Core\Profile\RequestInterface;

class OceanEngineClient
{
    private string $accessToken;

    private string $serverUrl;

    private string $boxUrl;

    private bool $isSandbox;

    /**
     * 模块映射，统一调用.
     */
    private static array $moduleMap = [
        'Account' => AccountModule::class,
        'Materials' => MaterialsModule::class,
        'DataReports' => DataReportsModule::class,
        'Tools' => ToolsModule::class,
        'JuLiangAds' => JuLiangAdsModule::class,
        'JuLiangQianChuan' => JuLiangQianChuanModule::class,
        'JuLiangStarMap' => JuLiangStarMapModule::class,
        'JuLiangLocalPush' => JuLiangLocalPushModule::class,
    ];

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
        if (! isset(self::$moduleMap[$name])) {
            throw new \BadMethodCallException("未定义的方法 '{$name}'。");
        }
        $className = self::$moduleMap[$name];
        return new $className($this);
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
        if (! isset(self::$moduleMap[$name])) {
            throw new \InvalidArgumentException("模块 {$name} 不存在。");
        }
        $className = self::$moduleMap[$name];
        return new $className($this);
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
}
