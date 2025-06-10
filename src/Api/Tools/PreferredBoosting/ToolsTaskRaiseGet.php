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

namespace Api\Tools\PreferredBoosting;

use Core\Profile\RpcRequest;

/**
 * Name 查询优选起量任务.
 *
 * 查询优选起量任务。
 * Class ToolsTaskRaiseGet.
 */
class ToolsTaskRaiseGet extends RpcRequest
{
    protected string $url = '/2/tools/task_raise/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
