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
use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineAuth;

// 加载自动加载器
require_once __DIR__ . '/../index.php';

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
        } catch (OceanEngineException $e) {
            echo '错误类型: ' . $e->getErrorType() . PHP_EOL;
            echo '错误码: ' . $e->getErrorCode() . PHP_EOL;
            echo '错误信息: ' . $e->getErrorMessage() . PHP_EOL;
            exit(1);
        }
    }
}

GetAuthCodeUrl::run();
