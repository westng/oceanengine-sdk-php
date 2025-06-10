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
 * Name 取消应用共享关系.
 *
 * 取消应用共享关系。
 * 当前共享类型支持PART（指定账户共享）、ALL（组织内某类账户所有共享）和COMPANY（公司主体内某类型所有账户共享）。
 * Class ToolsAppManagementBpShareCancel.
 */
class ToolsAppManagementBpShareCancel extends RpcRequest
{
    protected string $url = '/2/tools/app_management/bp_share/cancel/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
