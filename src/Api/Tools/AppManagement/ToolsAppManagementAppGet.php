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
 * Name 查询安卓应用信息.
 *
 * 查询安卓应用信息 可通过请求参数advertiser_id广告主id 查询广告主下应用列表及应用详细信息，具体返回信息见返回参数。
 * 与【查询安卓应用信息（支持所有账户体系）】接口的区别仅仅是支持的账户体系不同。
 * Class ToolsAppManagementAppGet.
 */
class ToolsAppManagementAppGet extends RpcRequest
{
    protected string $url = '/2/tools/app_management/app/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
