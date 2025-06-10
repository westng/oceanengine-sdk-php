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

namespace Api\JuLiangAds\AdsPro\SearchAdTool\NegativeKeywords;

use Core\Profile\RpcRequest;

/**
 * 批量更新广告否定词.
 */
class ToolsPrivativeWordPromotionUpdate extends RpcRequest
{
    protected string $url = '/v3.0/tools/privative_word/promotion/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
