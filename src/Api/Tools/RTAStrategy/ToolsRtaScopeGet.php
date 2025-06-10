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

namespace Api\Tools\RTAStrategy;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 获取RTA策略绑定信息列表.
 *
 * 获取RTA策略下的项目(广告组)列表，一个rta策略要么绑定campaign要么绑定project，不可能同时绑定。
 * Class ToolsRtaScopeGet.
 */
class ToolsRtaScopeGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/rta/scope/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户ID.
     */
    protected int $advertiser_id;

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

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
