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

namespace Api\JuLiangAds\DataReporting;

use Core\Profile\RpcRequest;

/**
 * PA深转归因上报.
 *
 * 该接口主要承接广告主上传需要巨量引擎归因事件，当前仅支持biz_type=4，包含引流电商PA深转归因实时回传和引流电商点击时间回传
 */
class AnalyticsAttribution extends RpcRequest
{
    protected string $url = '/v3.0/analytics/attribution/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
