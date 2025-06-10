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
 * 更新优词提量系数和生效维度.
 *
 * 需满足条件：
 * 1. 仅支持搜索直投
 * 2. 不支持搜索dpa广告，即landing_type = DPA && ad_type = SEARCH
 * 3. 优词提量系数和生效维度仅支持修改一种
 */
class ToolsKeywordsBidRatioUpdate extends RpcRequest
{
    protected string $url = '/v3.0/tools/keywords_bid_ratio/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
