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

namespace Api\DataReports\LandingPageReports;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 橙子建站落地页数据.
 *
 * 获取橙子建站和程序化落地页的数据。不包含第三方落地页。
 *
 * 该接口披露橙子建站落地页用户行为关键指标分日数据，包括：
 * 页面访问量:PV
 * 用户访问量:UV
 * 转化率:广告convert数/广告click事件
 * 平均加载时长:页面平均加载渲染时长
 * 平均阅读比例:用户平均浏览落地页的比例
 * 平均访问时长:平均在落地页的停留时长
 *
 * 落地页数据以当日前两天的方式返回，如：当3号入参查询周期1天，返回1号数据
 */
class ReportSitePage extends RpcRequest
{
    protected string $url = '/2/report/site/page/';

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
