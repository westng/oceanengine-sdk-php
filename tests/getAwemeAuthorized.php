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

require __DIR__ . '/../index.php';
require __DIR__ . '/config.php';

$auth = new OceanEngineAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);

$args = [
//    'advertiser_id' => ADVERTISER_ID,
//    'shop_id' => 23077751
    'advertiser_ids' => json_encode([
        1805994941666500
    ])
];
$req = $client::JuLiangAds()
    ->AccountInfo
    ->QianchuanAdvertiserTypeGet()
    ->setArgs($args)
    ->send();
var_dump($req->getBody());
