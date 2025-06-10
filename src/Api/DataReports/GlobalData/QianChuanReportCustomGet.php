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

namespace Api\DataReports\GlobalData;

use Core\Profile\RpcRequest;

/**
 * Name 获取全域素材数据
 * Class QianChuanReportCustomGet.
 */
class QianChuanReportCustomGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/report/custom/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
