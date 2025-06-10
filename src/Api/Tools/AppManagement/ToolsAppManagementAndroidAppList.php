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
 * Name 查询安卓应用信息（支持所有账户体系）.
 *
 * 查询账户下安卓应用信息（支持所有账户体系）及应用详细信息。
 * Class ToolsAppManagementAndroidAppList.
 */
class ToolsAppManagementAndroidAppList extends RpcRequest
{
    protected string $url = '/2/tools/app_management/android_app/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
