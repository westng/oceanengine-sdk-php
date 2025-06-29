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
 * Name 查询安卓应用母包.
 *
 * 查询安卓应用母包信息。
 * Class ToolsAppManagementAndroidBasicPackageGet.
 */
class ToolsAppManagementAndroidBasicPackageGet extends RpcRequest
{
    protected string $url = '/2/tools/app_management/android_basic_package/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
