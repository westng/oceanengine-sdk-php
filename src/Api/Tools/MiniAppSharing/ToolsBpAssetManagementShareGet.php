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

namespace Api\Tools\MiniAppSharing;

use Core\Profile\RpcRequest;

/**
 * Name 查看小游戏/小程序共享范围.
 *
 * 获取字节、微信小游戏/小程序资产共享范围。
 * Class ToolsBpAssetManagementShareGet.
 */
class ToolsBpAssetManagementShareGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/bp_asset_management/share/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
