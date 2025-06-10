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
 * 获取商品投放条件列表（线索版）.
 *
 * 该接口主要查询汽车行业投放条件信息，根据新线索商品id查询投放条件列表。
 *
 * 查询说明：
 * 1. 投放条件类型目前只支持汽车
 * 2. 只有启用的投放条件才可以在广告投放中添加
 */
class DpaAssetV2List extends RpcRequest
{
    protected string $url = '/2/dpa/asset_v2/list/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
