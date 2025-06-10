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

namespace Api\Tools\RTAStrategy;

use Core\Profile\RpcRequest;

/**
 * Name 设置账户下RTA策略生效范围.
 *
 * 设置广告账户下某个RTA策略的生效范围，设置一个新的RTA策略时，默认为启用状态，需要继续调用修改RTA策略状态。
 * Class ToolsRtaSetScope.
 */
class ToolsRtaSetScope extends RpcRequest
{
    protected string $url = '/2/tools/rta/set_scope/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
