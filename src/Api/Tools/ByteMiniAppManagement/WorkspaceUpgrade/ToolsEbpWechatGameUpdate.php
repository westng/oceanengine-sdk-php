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
 * 更新微信小游戏.
 */
class ToolsEbpWechatGameUpdate extends RpcRequest
{
    protected string $url = '/v3.0/tools/ebp/wechat_game/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
