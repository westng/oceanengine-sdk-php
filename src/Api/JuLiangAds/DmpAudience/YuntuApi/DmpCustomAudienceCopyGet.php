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

namespace Api\JuLiangAds\DmpAudience\YuntuApi;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 推送DMP人群包到云图账户.
 *
 * 通过此接口，将DMP人群包复制一个，并推送至对应的云图账号内，可在人群模块自定义分析查看和应用（该人群不支持再次推送）。
 */
class DmpCustomAudienceCopyGet extends RpcRequest
{
    protected string $url = '/2/dmp/custom_audience/copy/';

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
