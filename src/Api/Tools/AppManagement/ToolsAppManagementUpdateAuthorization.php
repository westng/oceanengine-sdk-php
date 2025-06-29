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
 * Name 更新应用共享关系.
 *
 * 增加和删除应用资产的共享关系。
 * Class ToolsAppManagementUpdateAuthorization.
 */
class ToolsAppManagementUpdateAuthorization extends RpcRequest
{
    protected string $url = '/2/tools/app_management/update/authorization/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
