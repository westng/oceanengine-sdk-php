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

namespace Api\Tools\ByteMiniAppManagement\WorkspaceUpgrade;

use Core\Profile\RpcRequest;

/**
 * 更新字节小游戏.
 */
class ToolsEbpMicroGameUpdate extends RpcRequest
{
    protected string $url = '/v3.0/tools/ebp/micro_game/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
