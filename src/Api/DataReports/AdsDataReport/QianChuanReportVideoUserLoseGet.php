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

namespace Api\DataReports\AdsDataReport;

use Core\Profile\RpcRequest;

/**
 * Name 视频互动流失数据
 * Class QianChuanReportVideoUserLoseGet.
 */
class QianChuanReportVideoUserLoseGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/report/video_user_lose/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
