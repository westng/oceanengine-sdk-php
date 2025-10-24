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

namespace Api\JuLiangQianChuan\PCFullPromotion;

use Core\Profile\RpcRequest;

/**
 * Name 获取商品全域可授权店铺列表
 * Class QianchuanUniPromotionAuthorizableShopList.
 */
class QianchuanUniPromotionAuthorizableShopList extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/authorizable_shop/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
