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

require_once __DIR__ . '/../../../index.php';
require_once __DIR__ . '/../../config/config.php';

/**
 * Name 获取账户钱包信息
 * Class QianchuanFinanceWalletGet.
 */
class QianchuanFinanceWalletGet
{
    public static function run(): void
    {
        try {
            $auth = new OceanEngineAuth(APPID, SECRET);
            $client = $auth->makeClient(TOKEN);

            $args = [
                'advertiser_id' => ADVERTISER_ID,
            ];

            $response = $client::JuLiangQianChuan()
                ->FundsMgmt
                ->QianchuanFinanceWalletGet()
                ->setArgs($args)
                ->send();

            echo "[请求成功]\n";

            $body = $response->getBody();
            $array = json_decode((string) $body, true);

            print_r($array);  // 清晰数组输出
        } catch (Throwable $e) {
            echo '[请求失败] ' . $e->getMessage() . PHP_EOL;
            exit(1);
        }
    }
}

QianchuanFinanceWalletGet::run();
