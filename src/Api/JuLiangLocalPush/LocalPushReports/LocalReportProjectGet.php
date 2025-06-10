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

namespace Api\JuLiangLocalPush\LocalPushReports;

use Core\Profile\RpcRequest;

/**
 * Name 获取项目数据
 * 获取项目维度报表数据内容
 * Class LocalReportProjectGet.
 */
class LocalReportProjectGet extends RpcRequest
{
    protected string $url = '/v3.0/local/report/project/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
