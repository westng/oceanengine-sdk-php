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
 * 连山视频投前分析提交.
 *
 * 素材属性提交分析
 */
class FileQualitySubmit extends RpcRequest
{
    protected string $url = '/v3.0/file/quality/submit/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
