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
 * 创建卡券.
 *
 * 创建青鸟线索通卡券接口
 */
class ClueCouponCreate extends RpcRequest
{
    protected string $url = '/2/clue/coupon/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
