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
 * Name 【代理返点】创建下载任务-通用.
 * 根据筛选条件下载任务,返回用户query_id,用于后续的文件下载.
 *
 * 文档可参考：https://bytedance.larkoffice.com/docx/Lhl7dU9vNowuySxFZIWcErgynCf
 * Class FileRebateCommonDownloadCreateTask.
 */
class FileRebateCommonDownloadCreateTask extends RpcRequest
{
    protected string $url = '/2/file/rebate/common_download/create_task/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
