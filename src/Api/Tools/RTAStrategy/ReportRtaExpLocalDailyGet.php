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

namespace Api\Tools\RTAStrategy;

use Core\Profile\RpcRequest;

/**
 * Name 获取站内媒体RTA联合实验数据（分天t+1）.
 *
 * 该接口用于查询站内媒体渠道的RTA联合实验数据，支持分天t+1级别数据。
 * 注：由于数据更新时间存在波动性，建议在查询当日上午7点后尝试拉取前一天的数据。
 * Class ReportRtaExpLocalDailyGet.
 */
class ReportRtaExpLocalDailyGet extends RpcRequest
{
    protected string $url = '/v3.0/report/rta_exp_local_daily/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
