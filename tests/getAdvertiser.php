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
use OceanEngineSDK\OceanEngineAuth;

require_once __DIR__ . '/../index.php';
require_once __DIR__ . '/config/config.php';

/**
 * Name 获取已授权的账户（店铺/代理商/组织）
 * Class AdvertiserGet.
 */
class AdvertiserGet
{
    public static function run(): void
    {
        try {
            $auth = new OceanEngineAuth(APPID, SECRET);
            $result = $auth->advertiserGet(TOKEN);
            print_r($result);
        } catch (Throwable $e) {
            fwrite(STDERR, '[请求失败] ' . $e->getMessage() . PHP_EOL);
            exit(1);
        }
    }
}

AdvertiserGet::run();
