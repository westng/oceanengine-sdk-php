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
 * 查询短剧商品原片授权申请状态.
 *
 * 此接口用于查询短剧商品原片授权申请的状态。
 * 通过广告主账户ID查询对应的授权申请进度和结果。
 */
class DpaPlayletAuthGet extends RpcRequest
{
    protected string $url = '/2/dpa/playlet/auth/get/';

    protected string $method = 'GET';

    /**
     * 广告主账户ID.
     */
    protected int $advertiser_id;
}
