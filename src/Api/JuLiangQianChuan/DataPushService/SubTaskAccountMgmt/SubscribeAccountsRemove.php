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

namespace Api\JuLiangQianChuan\DataPushService\SubTaskAccountMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 取消 Adv 订阅
 * Class SubscribeAccountsRemove.
 */
class SubscribeAccountsRemove extends RpcRequest
{
    protected string $url = '/v3.0/subscribe/accounts/remove/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
