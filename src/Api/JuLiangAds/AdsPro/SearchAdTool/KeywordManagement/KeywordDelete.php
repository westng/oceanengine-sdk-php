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
 * 删除关键词.
 *
 * 删除指定keyword_id的搜索词，可批量删除。
 */
class KeywordDelete extends RpcRequest
{
    protected string $url = '/v3.0/keyword/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
