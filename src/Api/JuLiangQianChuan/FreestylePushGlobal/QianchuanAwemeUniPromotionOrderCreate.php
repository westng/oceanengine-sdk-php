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
 * Name 创建随心推全域订单
 * Class QianchuanAwemeUniPromotionOrderCreate.
 */
class QianchuanAwemeUniPromotionOrderCreate extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme/uni_promotion/order/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
