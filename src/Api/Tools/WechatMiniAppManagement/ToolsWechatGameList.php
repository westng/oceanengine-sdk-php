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

namespace Api\Tools\WechatMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * 获取微信小游戏列表.
 *
 * 支持获取纵横账户下及广告主账户下的微信小游戏资产。
 */
class ToolsWechatGameList extends RpcRequest
{
    protected string $url = '/v3.0/tools/wechat_game/list/';

    protected string $method = 'GET';

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
