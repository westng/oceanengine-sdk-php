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
 * Name 创建安卓应用分包（支持所有账户体系）.
 *
 * 创建应用分包，支持所有账户体系下创建应用分包。
 * 母包package创建成功后，可以通过当前接口创建分包。
 * 目前API开放平台不支持母包package的创建，创建母包需要前往 投放平台-资产-移动应用。
 * Class ToolsAppManagementExtendPackageCreateV2.
 */
class ToolsAppManagementExtendPackageCreateV2 extends RpcRequest
{
    protected string $url = '/2/tools/app_management/extend_package/create_v2/';

    protected string $method = 'POST';

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
