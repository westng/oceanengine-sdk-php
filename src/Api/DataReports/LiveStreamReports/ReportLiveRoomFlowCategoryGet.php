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
 * 直播间流量来源报表.
 *
 * 此接口用于获取直播间的流量来源数据；
 *
 * 流量来源包含竞价广告、品牌广告、DOU+流量、自然流量
 * 支持获取分流量来源的直播间观看数、观看人数、人均停留时长、关注数、打赏次数、礼物总金额、商品订单数、商品订单金额
 *
 * 仅支持获取广告主账户关联的抖音号的直播数据，不再限制广告主账户和抖音号两者需为同一公司主体
 * 仅支持查询2020年7月1日之后的数据，查询的时间跨度最大为30天
 * 默认查询时间为最近7天，即7天前的同一时间至当前时间点（注意：巨量引擎广告投放平台-报表-广告产品-直播分析模块中的最近7天为7天前的0点至当前时间点，数据范围略有差异）
 * 指标为非实时数据，一般在次日凌晨产出前一天的数据（与直播是否结束无关）
 *
 * 数据更新频率：
 * 数据5～10分钟更新一次，正常情况8点～9点之间的数据，10点可以稳定。在晚高峰的时候，可能需要3个小时能稳定；
 * 一般历史数据都不会变，除了数据有问题有校对的情况会更新历史数据；
 */
class ReportLiveRoomFlowCategoryGet extends RpcRequest
{
    protected string $url = '/2/report/live_room/flow_category/get/';

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
