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
 * 查询文件异步上传任务.
 *
 * 查询异步上传解析任务的状态信息「支持所有账户体系」。
 */
class ToolsAppManagementUploadTaskList extends RpcRequest
{
    protected string $url = '/2/tools/app_management/upload_task/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * @return $this
     */
    public function setArgs(mixed $args): static
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }
}
