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
 * Name 更新全域推广计划投放时间
 * Class QianchuanUniPromotionAdScheduleDateUpdate.
 */
class QianchuanUniPromotionAdScheduleDateUpdate extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/ad/schedule_date/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 千川广告主id.
     */
    protected int $advertiser_id;
}
