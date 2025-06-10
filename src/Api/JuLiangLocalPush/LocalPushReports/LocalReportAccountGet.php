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
 * Name 查询账户数据
 * 查询本地推账户维度数据
 * Class LocalReportAccountGet.
 */
class LocalReportAccountGet extends RpcRequest
{
    protected string $url = '/v3.0/local/report/account/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
