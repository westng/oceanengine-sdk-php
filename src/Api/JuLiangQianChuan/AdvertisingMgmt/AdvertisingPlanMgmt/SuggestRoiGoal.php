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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\AdvertisingPlanMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 获取支付ROI目标建议
 * Class SuggestRoiGoal.
 */
class SuggestRoiGoal extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/suggest/roi/goal/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
