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
 * Name 查询优选起量任务数据.
 *
 * 查询优选起量任务数据。
 * Class ToolsTaskRaiseDataGet.
 */
class ToolsTaskRaiseDataGet extends RpcRequest
{
    protected string $url = '/2/tools/task_raise/data/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
