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

namespace Api\Tools\QuickAppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 查询快应用信息.
 *
 * 查询当前广告主的快应用。
 * Class ToolQuickAppManagementQuickAppGet.
 */
class ToolQuickAppManagementQuickAppGet extends RpcRequest
{
    protected string $url = '/2/tool/quick_app_management/quick_app/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
