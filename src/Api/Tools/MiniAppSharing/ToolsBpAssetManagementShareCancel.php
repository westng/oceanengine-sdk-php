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
 * 取消小游戏/小程序共享关系.
 *
 * 取消资产共享，支持取消字节、微信小程序/小游戏共享关系。
 */
class ToolsBpAssetManagementShareCancel extends RpcRequest
{
    protected string $url = '/v3.0/tools/bp_asset_management/share/cancel/';

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
