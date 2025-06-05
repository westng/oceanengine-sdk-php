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

namespace Api\JuLiangAds\Assets\Creatives;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 创建组件.
 *
 * 通过通用工具能力，创建不同的创意组件，用于广告投放。
 * 目前支持通过开放平台，创建7种创意组件，选择磁贴、投票磁贴、图片磁贴、电商磁贴、优惠券磁贴、推广卡片、游戏礼包码
 * 选择磁贴只支持按钮点击后跳转落地页、显示图片，暂不支持点击后显示卡券
 */
class CreativeComponentCreate extends RpcRequest
{
    protected string $url = '/2/assets/creative_component/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
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
