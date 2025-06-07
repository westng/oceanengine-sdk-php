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
 * 更新安卓应用分包版本（支持所有账户体系）.
 *
 * 通过账户id、账户类型和应用包id，更新全部或部分应用子包版本。
 */
class ToolsAppManagementExtendPackageUpdateV2 extends RpcRequest
{
    protected string $url = '/2/tools/app_management/extend_package/update_v2/';

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
