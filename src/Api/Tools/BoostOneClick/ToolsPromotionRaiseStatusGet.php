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
 * Name 获取一键起量方案列表.
 *
 * 获取已预约的广告方案信息。
 * Class ToolsPromotionRaiseStatusGet.
 */
class ToolsPromotionRaiseStatusGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_raise_status/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
