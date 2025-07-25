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

namespace Api\JuLiangAds\QingniaoLeads\CouponComponent;

use Core\Profile\RpcRequest;

/**
 * 获取家装联盟卡券列表.
 *
 * 线索通获取家装联盟卡券列表
 */
class DecorationCouponGet extends RpcRequest
{
    protected string $url = '/v3.0/decoration/coupon/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
