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

namespace Api\JuLiangAds\SubscriptionService\LianshanRDSSync;

use Core\Profile\RpcRequest;

/**
 * 连山投前分析结果查询.
 *
 * 素材属性结果查询
 */
class FileQualityGet extends RpcRequest
{
    protected string $url = '/v3.0/file/quality/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
