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
 * 获取安卓应用列表.
 */
class ToolsEbpAppList extends RpcRequest
{
    protected string $url = '/v3.0/tools/ebp/app/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
