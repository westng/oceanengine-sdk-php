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

namespace Api\JuLiangAds\DmpAudience;

use Core\Profile\RpcRequest;

/**
 * 删除人群包.
 *
 * 通过此接口可做人群包删除操作。已经在计划中使用的人群包不能被删除，只有该计划被删除后，人群包才可以删除。
 */
class DmpCustomAudienceDeleteGet extends RpcRequest
{
    protected string $url = '/2/dmp/custom_audience/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
