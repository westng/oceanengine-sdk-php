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

namespace Api\JuLiangAds\DataReports\AdsProDataReports;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 自定义报表.
 *
 * 自定义报表是基于巨量引擎升级版对于数据报表提供新的接口能力，您可以自由选择和组合指标和维度，以此定义数据报表的字段。
 *
 * 相关指标和维度可通过获取自定义报表可用维度和指标接口获取不同数据主题下的可用维度和指标。
 * 例如，想要获取由起量带来的增量数据，需要在筛选项中上传 field=is_boost &&values=1
 */
class ReportCustomGet extends RpcRequest
{
    protected string $url = '/v3.0/report/custom/get/';

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
