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

namespace Api\Tools\AppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 设置应用共享.
 *
 * 设置应用共享，可通过该接口将应用共享给相关组织或指定账户。
 * 该接口为增量共享。
 * CLass ToolsAppManagementBpShare.
 */
class ToolsAppManagementBpShare extends RpcRequest
{
    protected string $url = '/2/tools/app_management/bp_share/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
