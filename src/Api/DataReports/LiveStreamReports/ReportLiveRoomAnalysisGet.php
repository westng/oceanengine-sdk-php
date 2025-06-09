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

namespace Api\DataReports\LiveStreamReports;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 直播间分析报表.
 *
 * 此接口用于获取直播间的基础分析数据、互动分析数据、商品转化数据；
 *
 * 基础分析数据：观看数、观看人数、超1分钟观看数、超1分钟观看人数、人均停留时长等
 * 互动分析数据：评论数、分享数、关注数、打赏次数、礼物总金额等
 * 商品转化数据：查看购物车数、商品点击数、商品点击人数、商品下单数、商品下单人数、商品订单数、商品订单人数、商品订单金额等
 * 非电商直播类深度转化数据：组件展示数、组件点击数、组件点击率、安卓下载开始数、安卓下载完成数、安卓安装完成数、app激活数、app注册数、app付费次数、app首次付费数、app次留数、app次留率、团购支付订单数、团购支付订单金额、留资线索数等
 *
 * 仅支持获取广告主账户关联的抖音号的直播数据，不再限制广告主账户和抖音号两者需为同一公司主体；
 * 超1分钟观看数、app下载&团购服务&线索收集转化目标的直播间深度转化数据、全部人数类（非次数类）指标均为非实时数据，一般在次日凌晨产出前一天的数据（与直播是否结束无关），其它指标为实时更新数据
 *
 * 数据更新频率：
 * 数据5～10分钟更新一次
 * 一般历史数据都不会变，除了数据有问题有校对的情况会更新历史数据，第二天10点可以获取前一天稳定的消耗数据
 * Class ReportLiveRoomAnalysisGet.
 */
class ReportLiveRoomAnalysisGet extends RpcRequest
{
    protected string $url = '/2/report/live_room/analysis/get/';

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
