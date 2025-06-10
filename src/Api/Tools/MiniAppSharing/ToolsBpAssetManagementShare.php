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
 * Name 设置小游戏&小程序共享.
 *
 * 通用的共享接口，目前支持微信、字节小游戏/小程序资产。
 * Class ToolsBpAssetManagementShare.
 */
class ToolsBpAssetManagementShare extends RpcRequest
{
    protected string $url = '/v3.0/tools/bp_asset_management/share/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
