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
 * Name 获取任务下累计可查询的数据指标
 * Class StarReportDataTopicConfig.
 */
class StarReportDataTopicConfig extends RpcRequest
{
    protected string $url = '/2/star/report/data_topic_config/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
