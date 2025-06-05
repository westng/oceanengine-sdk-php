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

namespace Api\JuLiangAds\Tools\TargetingPackages;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 获取定向包.
 *
 * 获取广告主下定向包，不同类型定向包可应用于不同类型的计划。
 * 落地页：可用于推广目的为销售线索收集或推广目的为应用推广且下载方式为落地页的计划。
 * 应用推广（Android）：可用于推广目的为应用推广且下载方式为Android下载链接的计划。
 * 应用推广（iOS）：可用于推广目的为应用推广且下载方式为iOS下载链接的计划。
 * 其余类型：可应用于推广目的为该类型名称的计划。
 */
class AudiencePackageGet extends RpcRequest
{
    protected string $url = '/v3.0/audience_package/get/';

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
