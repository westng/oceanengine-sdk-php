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
use OceanEngineSDK\OceanEngineClient;

// 加载自动加载器
require_once __DIR__ . '/../../../../../index.php';

/**
 * Name 获取账户日预算
 * Class AccountBudgetGet.
 */
class AccountBudgetGet
{
    public static function run(): void
    {
        try {
            $client = new OceanEngineClient(TOKEN);

            $args = [
                // 'advertiser_id' => ADVERTISER_ID,
            ];

            $response = $client->module('JuLiangQianChuan')
                ->AccountBudget
                ->AccountBudgetGet()
                ->setParams($args)
                ->send();

            echo "[请求成功]\n";

            $body = $response->getBody();
            $array = json_decode((string) $body, true);

            print_r($array);  // 清晰数组输出
        } catch (OceanEngineException $e) {
            echo '错误类型: ' . $e->getErrorType() . PHP_EOL;
            echo '错误码: ' . $e->getErrorCode() . PHP_EOL;
            echo '错误信息: ' . $e->getErrorMessage() . PHP_EOL;
            exit(1);
        }
    }
}

AccountBudgetGet::run();
