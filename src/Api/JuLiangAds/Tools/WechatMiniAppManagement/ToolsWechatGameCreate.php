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

namespace Api\JuLiangAds\Tools\WechatMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * 创建微信小游戏.
 *
 * 微信小游戏创建后不支持更新。
 * 请您确保您已经上传了投放资质，且您上传投放资质的广告主账户认证的公司主体，需与资产创建流程中选择的公司主体一致，以用于资质审核。
 * 若未提交投放资质，请通过【投放资质提交接口】提交资质，否则资产审核将不通过。
 * 资质信息可以通过【获取投放资质信息】接口查询。
 */
class ToolsWechatGameCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/wechat_game/create/';

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
