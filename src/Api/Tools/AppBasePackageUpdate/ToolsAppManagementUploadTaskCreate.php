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
 * Name 创建异步文件上传任务.
 *
 * 执行异步上传操作「支持所有账户体系」。
 * 注意：调用频控限制单个APP_ID每30分钟最多调用20次。
 * Class ToolsAppManagementUploadTaskCreate。
 */
class ToolsAppManagementUploadTaskCreate extends RpcRequest
{
    protected string $url = '/2/tools/app_management/upload_task/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
