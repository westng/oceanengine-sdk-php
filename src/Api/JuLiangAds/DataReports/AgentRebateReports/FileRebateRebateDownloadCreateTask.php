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

namespace Api\JuLiangAds\DataReports\AgentRebateReports;

use Core\Profile\RpcRequest;

/**
 * 创建【核算明细数据】下载任务.
 *
 * 返回文件详细内容请查看：https://bytedance.larkoffice.com/docx/EBETdc8IIonmWoxWYJ7c1dNtndg
 */
class FileRebateRebateDownloadCreateTask extends RpcRequest
{
    protected string $url = '/2/file/rebate/rebate_download/create_task/';

    protected string $method = 'POST';

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
