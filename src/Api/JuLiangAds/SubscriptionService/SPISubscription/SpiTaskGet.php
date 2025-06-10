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

namespace Api\JuLiangAds\SubscriptionService\SPISubscription;

use Core\Profile\RpcRequest;

/**
 * 获取推送数据列表.
 *
 * 该接口用于查询2天内SPI推送给开发者回调地址的数据
 *
 * 查询推送数据，限制最多只能查询2天内数据，即当前时间-开始时间<-2天
 * 该接口token为应用级token，需要先申请【获取APP-Access-Token】
 */
class SpiTaskGet extends RpcRequest
{
    protected string $url = '/2/spi_task/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
