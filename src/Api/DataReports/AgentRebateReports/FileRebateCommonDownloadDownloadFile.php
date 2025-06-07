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
 * 【代理返点】下载任务结果-通用.
 * 通过指定的task_id,获取对应的数据明细文件.
 */
class FileRebateCommonDownloadDownloadFile extends RpcRequest
{
    protected string $url = '/2/file/rebate/common_download/download_file/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * @return $this
     */
    public function setArgs(mixed $args): static
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }
}
