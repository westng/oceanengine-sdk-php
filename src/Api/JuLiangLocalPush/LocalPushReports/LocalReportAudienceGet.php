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
 * Name 获取本地推受众分析数据
 * 本地推受众分析报表
 * Class LocalReportAudienceGet.
 */
class LocalReportAudienceGet extends RpcRequest
{
    protected string $url = '/v3.0/local/report/audience/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
