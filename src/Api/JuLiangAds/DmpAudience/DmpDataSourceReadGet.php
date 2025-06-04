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
 * 数据源详细信息.
 *
 * 通过数据源id，查询该数据源相关信息和其对应的人群包信息。数据源解析完成后会返回default_audience：数据源对应的人群包相关信息，其中人群包ID是该人群包的唯一标识。
 */
class DmpDataSourceReadGet extends RpcRequest
{
    protected string $url = '/2/dmp/data_source/read/';

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
