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

namespace Api\JuLiangAds\DataReports\LiveStreamReports;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 直播受众分析报表.
 *
 * 此接口用于进行直播间的受众分析、获取直播间用户画像数据；
 *
 * 用户画像维度包含性别、年龄范围、省份、城市、用户设备平台；
 * 支持获取分用户画像维度的直播间观看数、关注数、加入粉丝团数、打赏次数、商品订单数、客单价等；
 *
 * 仅支持获取广告主账户关联的抖音号的直播数据，不再限制广告主账户和抖音号两者需为同一公司主体；
 * 仅支持查询2020年7月1日之后的数据，查询的时间跨度最大为30天；
 * 默认查询时间为最近7天，即7天前的同一时间至当前时间点（注意：巨量引擎广告投放平台-报表-广告产品-直播分析模块中的最近7天为7天前的0点至当前时间点，数据范围略有差异）；
 * 数据为非实时更新数据，一般在次日凌晨产出前一天的数据（与直播是否结束无关）；
 */
class ReportLiveRoomAudiencePortraitGet extends RpcRequest
{
    protected string $url = '/2/report/live_room/audience/portrait/get/';

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
