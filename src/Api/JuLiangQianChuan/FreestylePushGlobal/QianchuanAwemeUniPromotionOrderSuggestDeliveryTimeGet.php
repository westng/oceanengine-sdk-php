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

namespace Api\JuLiangQianChuan\FreestylePushGlobal;

use Core\Profile\RpcRequest;

/**
 * Name 获取随心推全域续费建议延长时长
 * Class QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGet.
 */
class QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme/uni_promotion/order/suggest/delivery_time/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 千川广告主id.
     */
    protected int $advertiser_id;
}
