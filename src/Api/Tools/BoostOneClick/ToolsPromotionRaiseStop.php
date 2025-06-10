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
 * Name 关停正在起量的广告.
 *
 * 关停正在起量的方案。
 * Class ToolsPromotionRaiseStop.
 */
class ToolsPromotionRaiseStop extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_raise/stop/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
