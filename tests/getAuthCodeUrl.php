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
 * Name 获取授权链接
 * Class GetAuthCodeUrl.
 */
class GetAuthCodeUrl
{
    public static function run(): void
    {
        try {
            $auth = new OceanEngineAuth(APPID, SECRET);
            $url = $auth->getAuthCodeUrl(CALLBACK_URL, '', 'auth_code', 'AD');
            echo "[授权链接]\n{$url}\n";
        } catch (Throwable $e) {
            echo "[失败]\n" . $e->getMessage() . PHP_EOL;
            exit(1);
        }
    }
}

GetAuthCodeUrl::run();
