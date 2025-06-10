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
 * 获取商品详情.
 *
 * 根据商品库查询商品库中的商品列表。
 *
 * 查询规则：
 * 1. 若仅填写商品库ID（platform_id）不填filtering.product_ids则表示查询该商品库下所有商品
 * 2. 传入商品ID后视作查询商品精准查询，不会回传分页信息
 *
 * 查询方式：
 * - 只传商品库ID：查询商品库下所有商品
 * - 传入商品ID：进行精准查询
 */
class DpaProductDetailGet extends RpcRequest
{
    protected string $url = '/2/dpa/product/detail/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
