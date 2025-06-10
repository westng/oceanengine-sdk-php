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

namespace Api\JuLiangAds\SubscriptionService\SubscriptionAccountMgr;

use Core\Profile\RpcRequest;

/**
 * 查询订阅 Adv.
 *
 * 查询订阅任务所订阅的 Adv
 */
class SubscribeAccountsList extends RpcRequest
{
    protected string $url = '/v3.0/subscribe/accounts/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
