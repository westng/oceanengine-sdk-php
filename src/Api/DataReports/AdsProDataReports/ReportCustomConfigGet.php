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

namespace Api\DataReports\AdsProDataReports;

use Core\Profile\RpcRequest;

/**
 * Name 获取自定义报表可用指标和维度.
 *
 * 获取自定义报表可用指标和维度
 * Class ReportCustomConfigGet.
 */
class ReportCustomConfigGet extends RpcRequest
{
    protected string $url = '/v3.0/report/custom/config/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
