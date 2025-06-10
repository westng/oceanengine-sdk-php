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
 * Name 创建安卓应用分包.
 *
 * 通过广告主id和应用包id，为应用包创建对应的分包信息。
 * 目前开放平台不支持母包package的创建，创建母包需要前往 投放平台-资产-移动应用；
 * 母包package创建成功后，可以通过当前接口创建分包。
 * 单个package目前支持分包上限3000个；
 * 单次创建分包数量上限是100。
 * Class ToolsAppManagementExtendPackageCreate.
 */
class ToolsAppManagementExtendPackageCreate extends RpcRequest
{
    protected string $url = '/2/tools/app_management/extend_package/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
