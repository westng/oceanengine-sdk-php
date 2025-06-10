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

namespace Api\JuLiangAds\AdsPro\SearchAdTool\KeywordManagement;

use Core\Profile\RpcRequest;

/**
 * 获取关键词列表.
 *
 * 根据过滤条件获取符合条件的所有关键词。
 *
 * 注意：
 * 1. 目前仅支持根据promotion_id获取该广告下的关键词
 */
class KeywordList extends RpcRequest
{
    protected string $url = '/v3.0/keyword/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
