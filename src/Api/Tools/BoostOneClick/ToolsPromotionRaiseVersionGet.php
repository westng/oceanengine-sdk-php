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
 * Name 获取起量版本信息.
 *
 * 获取已完成一键起量或一键起量中的广告在多次起量过程中产生的起量版本号及对应的起止时间。
 * Class ToolsPromotionRaiseVersionGet.
 */
class ToolsPromotionRaiseVersionGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_raise_version/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
