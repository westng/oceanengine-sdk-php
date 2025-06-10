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
 * Name 更新安卓应用分包版本.
 *
 * 通过广告主id和应用包id，更新全部或部分应用子包版本。
 * Class ToolsAppManagementExtendPackageUpdate.
 */
class ToolsAppManagementExtendPackageUpdate extends RpcRequest
{
    protected string $url = '/2/tools/app_management/extend_package/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
