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

namespace Api\JuLiangQianChuan\PCFullPromotion;

use Core\Profile\RpcRequest;

/**
 * Name 广告主申请全域推广授权
 * Class QianchuanUniPromotionAuthorizationApply.
 */
class QianchuanUniPromotionAuthorizationApply extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/authorization/apply/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
