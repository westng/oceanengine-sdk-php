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
 * 查询安卓应用母包详情.
 */
class ToolsEbpAppDetail extends RpcRequest
{
    protected string $url = '/v3.0/tools/ebp/app/detail/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
