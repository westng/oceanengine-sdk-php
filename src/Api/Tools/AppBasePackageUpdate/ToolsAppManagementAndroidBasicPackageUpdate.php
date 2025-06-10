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

namespace Api\Tools\AppBasePackageUpdate;

use Core\Profile\RpcRequest;

/**
 * Name 更新安卓应用母包.
 *
 * 更新安卓应用母包对应的信息。
 * 注意：单APP_ID接口调用限制为 3QPS。
 * Class ToolsAppManagementAndroidBasicPackageUpdate.
 */
class ToolsAppManagementAndroidBasicPackageUpdate extends RpcRequest
{
    protected string $url = '/2/tools/app_management/android_basic_package/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
