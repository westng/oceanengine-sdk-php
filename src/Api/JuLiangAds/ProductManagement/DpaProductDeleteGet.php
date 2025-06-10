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
 * 删除通用版商品.
 *
 * 此接口用于删除通用版商品库中的特定商品。
 * 删除后商品将无法恢复，请谨慎操作。
 */
class DpaProductDeleteGet extends RpcRequest
{
    protected string $url = '/2/dpa/product/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
