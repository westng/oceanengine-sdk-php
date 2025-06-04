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

namespace Api\JuLiangAds\DmpAudience;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 推送人群包.
 *
 * 每个人群包生成一个人群包id后，都需要经过推送，才可以在被推送的广告主下使用。同时，推送人群包可以将人群包共享给同主体的广告主。
 */
class DmpCustomAudiencePushV2Get extends RpcRequest
{
    protected string $url = '/2/dmp/custom_audience/push_v2/';

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
