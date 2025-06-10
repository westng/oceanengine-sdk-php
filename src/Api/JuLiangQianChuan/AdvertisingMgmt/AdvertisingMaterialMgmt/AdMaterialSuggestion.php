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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\AdvertisingMaterialMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 计划下素材审核建议
 * Class AdMaterialSuggestion.
 */
class AdMaterialSuggestion extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/ad/material/suggestion/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
