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
 * Name 【代理返点】查询下载任务-通用.
 * 查询指定query_id的所有下载任务
 * Class FileRebateCommonDownloadGetDownloadTaskList.
 */
class FileRebateCommonDownloadGetDownloadTaskList extends RpcRequest
{
    protected string $url = '/2/file/rebate/common_download/get_download_task_list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
