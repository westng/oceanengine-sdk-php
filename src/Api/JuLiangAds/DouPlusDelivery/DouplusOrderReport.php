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

namespace Api\JuLiangAds\DouPlusDelivery;

use Core\Profile\RpcRequest;

/**
 * 取订单数据报表.
 *
 * 获取DOU+订单指标数据
 */
class DouplusOrderReport extends RpcRequest
{
    protected string $url = '/v3.0/douplus/order/report/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
