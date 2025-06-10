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

namespace Api\Tools\BoostOneClick;

use Core\Profile\RpcRequest;

/**
 * Name 获取广告起量状态.
 *
 * 批量获取广告当前的一键起量状态。
 * Class ToolsPromotionRaiseStatusCurrentIdsGet.
 */
class ToolsPromotionRaiseStatusCurrentIdsGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_raise_status_current_ids/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
