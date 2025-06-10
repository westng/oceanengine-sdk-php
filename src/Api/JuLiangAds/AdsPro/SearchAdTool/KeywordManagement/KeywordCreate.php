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
 * 创建关键词.
 *
 * 在指定的promotion_id下创建搜索关键词，支持在原有关键词基础上进行新增
 *
 * 需满足条件：
 * 1. 目前仅支持搜索直投广告
 * 2. 创建关键词时会自动将优词添加为关键词
 */
class KeywordCreate extends RpcRequest
{
    protected string $url = '/v3.0/keyword/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
