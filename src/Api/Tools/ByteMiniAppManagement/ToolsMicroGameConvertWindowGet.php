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

namespace Api\Tools\ByteMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * 查询字节小游戏归因激活时间窗.
 *
 * 使用场景：可通过该接口查询当前字节小游戏最新的归因激活时间窗配置内容，如希望修改归因激活时间窗，需要前往编辑接口。
 */
class ToolsMicroGameConvertWindowGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/micro_game/convert_window/get/';

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
