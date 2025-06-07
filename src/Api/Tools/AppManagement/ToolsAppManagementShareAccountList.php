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
 * 查看应用共享范围.
 *
 * 查询应用共享范围，查询巨量纵横组织下某个应用的共享范围。
 */
class ToolsAppManagementShareAccountList extends RpcRequest
{
    protected string $url = '/2/tools/app_management/share_account/list/';

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
