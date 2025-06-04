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
 * 人群包详细信息.
 *
 * 用户可以通过调用此接口，查询广告主下的指定人群包信息。支持查询已删除的人群包信息。
 */
class DmpCustomAudienceReadGet extends RpcRequest
{
    protected string $url = '/2/dmp/custom_audience/read/';

    protected string $method = 'GET';

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
