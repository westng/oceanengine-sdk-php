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
 * Name 代理商数据.
 *
 * 此接口用于获取代理商下所有广告主的消耗数据包括实时与历史。
 * 对应一站式代理商平台-优化管理模块-客户列表数据（包括实时数据与历史数据），非商务管理模块数据。
 * 实时数据指标和历史数据指标不同，请仔细确认；
 * 获取代理商侧直接管理的广告主数据，非跨级广告主数据
 * Class ReportAgentGetV2.
 */
class ReportAgentGetV2 extends RpcRequest
{
    protected string $url = '/2/report/agent/get_v2/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
