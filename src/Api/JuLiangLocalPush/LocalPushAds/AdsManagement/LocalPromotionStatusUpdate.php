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

namespace Api\JuLiangLocalPush\LocalPushAds\AdsManagement;

use Core\Profile\RpcRequest;

/**
 * Name 批量更新广告状态
 * Class LocalPromotionStatusUpdate.
 */
class LocalPromotionStatusUpdate extends RpcRequest
{
    protected string $url = '/v3.0/local/promotion/status/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
