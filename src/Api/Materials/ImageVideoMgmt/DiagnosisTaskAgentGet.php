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

namespace Api\Materials\ImageVideoMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 代理商轮询任务结果.
 *
 * 代理商根据task_id获取前测结果
 * Class DiagnosisTaskAgentGet.
 */
class DiagnosisTaskAgentGet extends RpcRequest
{
    protected string $url = '/2/diagnosis_task/agent/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
