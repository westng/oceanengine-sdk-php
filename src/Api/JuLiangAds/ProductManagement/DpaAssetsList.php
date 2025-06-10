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
 * 获取投放条件列表（通用版）.
 *
 * 该接口主要查询汽车行业投放条件信息，根据商品id查询投放条件列表。
 *
 * 投放说明：
 * 1. 投放汽车行业商品广告，需要在计划中传入商品信息（商品库ID+商品ID）+投放条件信息（投放条件ID）
 * 2. 投放条件状态（status）为启用，才可以用于商品广告投放
 * 3. 投放条件类型（asset_type）目前仅支持汽车
 */
class DpaAssetsList extends RpcRequest
{
    protected string $url = '/2/dpa/assets/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
