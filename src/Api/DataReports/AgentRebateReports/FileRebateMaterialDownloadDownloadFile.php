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

namespace Api\DataReports\AgentRebateReports;

use Core\Profile\RpcRequest;

/**
 * Name （2024）下载任务结果.
 * 通过指定的task_id,获取对应的数据明细文件.
 * Class FileRebateMaterialDownloadDownloadFile.
 */
class FileRebateMaterialDownloadDownloadFile extends RpcRequest
{
    protected string $url = '/2/file/rebate/material_download/download_file/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
