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

namespace Api\JuLiangAds\AdsPro\SearchAdTool\AccountKeywordBoost;

use Core\Profile\RpcRequest;

/**
 * 查询优词提量系数信息.
 *
 * 需满足条件：
 * 1. 仅支持搜索直投
 * 2. 不支持搜索dpa链路（即landing_type = DPA && ad_type = SEARCH）
 */
class ToolsKeywordsBidRatioGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/keywords_bid_ratio/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
