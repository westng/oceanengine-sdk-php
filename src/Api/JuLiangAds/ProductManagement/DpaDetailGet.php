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

namespace Api\JuLiangAds\ProductManagement;

use Core\Profile\RpcRequest;

/**
 * 获取商品列表.
 *
 * 根据商品库查询商品库中的商品列表。
 * 通过商品库ID（product_id）+过滤条件查询商品列表信息。
 * 请求参数中必须填写商品库ID。
 */
class DpaDetailGet extends RpcRequest
{
    protected string $url = '/2/dpa/detail/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
