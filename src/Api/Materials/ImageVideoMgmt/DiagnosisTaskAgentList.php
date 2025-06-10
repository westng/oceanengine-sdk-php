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
 * Name 代理商获取任务列表.
 * Class DiagnosisTaskAgentList.
 */
class DiagnosisTaskAgentList extends RpcRequest
{
    protected string $url = '/2/diagnosis_task/agent/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
