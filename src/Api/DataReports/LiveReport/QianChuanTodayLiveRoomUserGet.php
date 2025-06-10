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

namespace Api\DataReports\LiveReport;

use Core\Profile\RpcRequest;

/**
 * Name 获取直播间用户洞察
 * Class QianChuanTodayLiveRoomUserGet.
 */
class QianChuanTodayLiveRoomUserGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/today_live/room/user/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
