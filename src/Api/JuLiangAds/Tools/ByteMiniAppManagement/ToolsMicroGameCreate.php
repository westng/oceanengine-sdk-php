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

namespace Api\JuLiangAds\Tools\ByteMiniAppManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 创建字节小游戏.
 *
 * 创建字节小游戏资产时，小游戏调起链接存在两种信息录入方式：
 * 1. 通过参数 game_link.link 录入完整的链接信息。
 * 2. 通过参数 game_link.start_param 利用平台能力生成调起链接，进而录入链接信息。
 *
 * 请注意：两种方式仅生效一种。当以上两个参数均有值时，将按照方式1.生效逻辑。
 *
 * 方式1.录入链接信息：链接中可包含自定义的参数，但需确保链接能够成功调起小游戏。以此方式创建资产，仅生效参数 game_link.link。
 * 若同时传入参数 game_link.start_param ，后者参数无效，以 game_link.link 中解析的内容为准。
 *
 * 方式2.（推荐）录入链接信息：确保参数 game_link.link 为空值，同时参数 game_link.start_param 填写应符合提示规范。
 */
class ToolsMicroGameCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/micro_game/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
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
