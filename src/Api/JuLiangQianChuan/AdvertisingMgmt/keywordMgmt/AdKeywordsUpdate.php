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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\keywordMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 更新关键词
 * Class AdKeywordsUpdate.
 */
class AdKeywordsUpdate extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/ad/keywords/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
