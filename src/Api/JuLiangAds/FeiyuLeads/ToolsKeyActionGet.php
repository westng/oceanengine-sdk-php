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

namespace Api\JuLiangAds\FeiyuLeads;

use Core\Profile\RpcRequest;

/**
 * 获取活动记录.
 *
 * 获取广告主的飞鱼获取活动记录（目前白名单开放，如需使用请联系对应销售）。
 * 为保证接口使用的安全性避免调取他人的线索信息，该接口只可用于查询自己广告主下的线索信息，
 * 即需查询的广告主账号的主体需与APPID对应开发者的主体保持一致，才可获取到线索的信息，否则会报错！
 */
class ToolsKeyActionGet extends RpcRequest
{
    protected string $url = '/2/tools/key_action/get/';

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
