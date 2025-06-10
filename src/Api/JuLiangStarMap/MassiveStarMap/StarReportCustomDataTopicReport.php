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

namespace Api\JuLiangStarMap\MassiveStarMap;

use Core\Profile\RpcRequest;

/**
 * Name 获取投后数据主题累计数据
 * Class StarReportOrderUserDistributionGet.
 */
class StarReportCustomDataTopicReport extends RpcRequest
{
    protected string $url = '/2/star/report/custom_data_topic_report/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
