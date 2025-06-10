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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\GlobalPromotion;

use Core\Profile\RpcRequest;

/**
 * Name 全域达人获取可投商品列表
 * Class UniPromotionProductAwemeGet.
 */
class UniPromotionProductAwemeGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/product/aweme/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
