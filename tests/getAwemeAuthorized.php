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
    'advertiser_id' => ADVERTISER_ID,
];

// 巨量千川
$req = $client::JuLiangQianChuan()
    ->FreestylePushPlcmnt
    ->QianchuanAwemeInterestActionInterestKeyword()
    ->setArgs($args)
    ->send();
var_dump($req->getBody());

//// 巨量星图
//$req = $client::JuLiangStarMap()
//    ->AdvertiserInfoMgmt
//    ->StarInfo()
//    ->setArgs($args)
//    ->send();
//var_dump($req->getBody());
