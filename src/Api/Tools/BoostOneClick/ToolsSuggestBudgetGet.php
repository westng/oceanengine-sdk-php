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
 * Name 获取广告建议起量预算.
 *
 * 通过adv_id和promotion_ids获取建议的广告起量预算。
 * Class ToolsSuggestBudgetGet.
 */
class ToolsSuggestBudgetGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/suggest_budget/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
