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
 * Name （2024）创建【明点化素材数据】下载任务
 *
 * 返回文件详细内容请查看：https://bytedance.larkoffice.com/docx/Suv4dhR6RoYNqHxQvRrcFYPSnmc
 * Class FileRebateMaterialDownloadCreateTask.
 */
class FileRebateMaterialDownloadCreateTask extends RpcRequest
{
    protected string $url = '/2/file/rebate/material_download/create_task/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
