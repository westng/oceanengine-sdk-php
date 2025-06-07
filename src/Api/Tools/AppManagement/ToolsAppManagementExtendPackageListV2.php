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
 * 查询安卓应用分包列表（支持所有账户体系）.
 *
 * 查询分包列表（支持所有账户体系），可查询该应用包相关信息和包含的分包信息。
 * 不受分包新建方式（系统自动、手动上传渠道号分包）影响，都可以获取到。
 * 本接口能力覆盖旧接口查询应用分包列表，且支持多账户体系（AD、BP和星图），因此可迁移至本接口获取应用分包列表。
 */
class ToolsAppManagementExtendPackageListV2 extends RpcRequest
{
    protected string $url = '/2/tools/app_management/extend_package/list_v2/';

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
