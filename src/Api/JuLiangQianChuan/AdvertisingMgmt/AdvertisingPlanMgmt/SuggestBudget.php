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
 * Name 获取建议预算接口
 * Class SuggestBudget.
 */
class SuggestBudget extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/suggest/budget/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
