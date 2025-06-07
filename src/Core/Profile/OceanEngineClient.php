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
use Api\JuLiangAds\Module as JuLiangAdsModule;
use Api\Tools\Module as JuLiangQianChuanModule;
use Api\JuLiangStarMap\Module as JuLiangStarMapModule;
use Api\Materials\Module as MaterialsModule;
use Core\Exception\InvalidParamException;
use Core\Exception\OceanEngineException;
use Core\Http\HttpRequest;
use Core\Http\HttpResponse;
use Core\Profile\RequestInteface;

/**
 * @method static \Api\Tools\Module JuLiangQianChuan()
 * @method static \Api\JuLiangAds\Module JuLiangAds()
 * @method static \Api\JuLiangStarMap\Module JuLiangStarMap()
 * @method static \Api\Account\Module Account()
 * @method static \Api\Materials\Module Materials()
 */
class OceanEngineClient
{
    public static string $access_token;

    public static string $server_url = 'https://api.oceanengine.com/open_api';

    public static string $box_url = 'https://api.oceanengine.com/open_api';

    public static bool $is_sanbox = false;

    private static array $instance = [];

    /**
     * 模块映射，统一调用.
     */
    private static array $moduleMap = [
        'JuLiangAds' => JuLiangAdsModule::class,
        'JuLiangQianChuan' => JuLiangQianChuanModule::class,
        'JuLiangStarMap' => JuLiangStarMapModule::class,
        'Account' => AccountModule::class,
        'Materials' => MaterialsModule::class,
    ];

    // 禁止被实例化
    private function __construct($access_token, $is_sanbox, $server_url, $box_url) {}

    // 禁止clone
    private function __clone() {}

    /**
     * 静态魔术方法，动态调用模块.
     *
     * @throws \RuntimeException
     * @throws \BadMethodCallException
     */
    public static function __callStatic(string $name, array $arguments)
    {
        if (! isset(static::$access_token)) {
            throw new \RuntimeException('请先调用 OceanEngineClient::getInstance() 初始化客户端，设置 access_token');
        }
        if (! isset(self::$instance[static::$access_token])) {
            throw new \RuntimeException('当前 access_token 未初始化，请先调用 getInstance() 方法');
        }

        if (isset(self::$moduleMap[$name])) {
            $className = self::$moduleMap[$name];
            return new $className(self::$instance[static::$access_token]);
        }
        throw new \BadMethodCallException("未定义的静态方法 '{$name}'。");
    }

    /**
     * 获取单例实例.
     */
    public static function getInstance(string $access_token, bool $is_sanbox = false, ?string $server_url = null, ?string $box_url = null): self
    {
        static::$access_token = $access_token;
        static::$is_sanbox = $is_sanbox;

        if ($server_url !== null) {
            static::$server_url = $server_url;
        }
        if ($box_url !== null) {
            static::$box_url = $box_url;
        }

        if (empty(self::$instance[$access_token])) {
            self::$instance[$access_token] = new self($access_token, $is_sanbox, $server_url, $box_url);
        }
        return self::$instance[$access_token];
    }

    /**
     * 执行 HTTP 请求并返回响应.
     *
     * @throws OceanEngineException
     */
    public function excute(RequestInteface $request, ?string $url = null): HttpResponse
    {
        $request->check();
        $params = $request->getParams();
        $headers = [
            'Access-Token' => static::$access_token,
            'Content-Type' => $request->getContentType(),
        ];

        if ($url === null) {
            $url = $request->getUrl();
            if ($url === '') {
                throw new InvalidParamException('HTTP URL is required, and now the URL is empty');
            }
            if (! str_starts_with($url, 'http')) {
                $url = (static::$is_sanbox ? static::$box_url : static::$server_url) . $url;
            }
        }

        if ($request->getMethod() === 'GET') {
            $url .= '?' . http_build_query($params);
            $params = null;
        }

        if (strpos($request->getContentType(), 'json') !== false) {
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
}
