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

namespace Api\JuLiangAds\Assets\Events;

use Core\Profile\RpcRequest;

/**
 * 获取可用优化目标（巨量广告升级版）.
 *
 * 通过此接口，您可查询项目创建时，不同参数组合情况下可以填写的优化目标external_action和深度优化目标deep_external_action
 */
class EventManagerOptimizedGoalGetV2 extends RpcRequest
{
    protected string $url = '/3.0/event_manager/optimized_goal/get_v2/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
