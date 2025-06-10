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

namespace Api\Account\Agency;

use Core\Profile\RpcRequest;

/**
 * Name 获取代理商账户信息
 * Describe 该接口广告&千川&星图
 * Class AgentInfo.
 */
class AgentInfo extends RpcRequest
{
    protected string $url = '/2/agent/info/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
