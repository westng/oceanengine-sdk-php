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

namespace Api\JuLiangAds\Assets\Events;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 获取可用深度优化方式（广告投放升级版）.
 *
 * 投放2.0获取可用深度优化方式
 */
class EventManagerDeepBidTypeGet extends RpcRequest
{
    protected string $url = '/3.0/event_manager/deep_bid_type/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
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
