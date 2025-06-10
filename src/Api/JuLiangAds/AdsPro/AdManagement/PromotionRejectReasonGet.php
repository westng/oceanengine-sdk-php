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

namespace Api\JuLiangAds\AdsPro\AdManagement;

use Core\Profile\RpcRequest;

/**
 * Name 批量获取广告审核建议
 * Class PromotionRejectReasonGet.
 */
class PromotionRejectReasonGet extends RpcRequest
{
    protected string $url = '/v3.0/promotion/reject_reason/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
