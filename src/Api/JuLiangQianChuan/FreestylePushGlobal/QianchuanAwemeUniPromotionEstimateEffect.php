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
 * Name 获取随心推全域投放效果预估
 * Class QianchuanAwemeUniPromotionEstimateEffect.
 */
class QianchuanAwemeUniPromotionEstimateEffect extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme/uni_promotion/estimate/effect/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 千川广告账户ID.
     */
    protected int $advertiser_id;
}
