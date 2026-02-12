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

namespace Api\Tools\AppManagement\WorkspaceUpgrade;

use Core\Profile\RpcRequest;

/**
 * 创建安卓应用分包.
 */
class ToolsEbpAppExtendCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/ebp/app_extend/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
