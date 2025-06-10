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

namespace Api\JuLiangAds\AdsPro\SearchAdTool;

use Core\Profile\RpcRequest;

/**
 * 获取广告下可用蓝海关键词.
 */
class ToolsBlueFlowKeywordList extends RpcRequest
{
    protected string $url = '/v3.0/tools/blue_flow_keyword/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
