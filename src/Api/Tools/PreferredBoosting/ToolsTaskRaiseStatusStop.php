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
 * Name 关闭优选起量任务.
 *
 * 关闭优选起量任务。
 * Class ToolsTaskRaiseStatusStop.
 */
class ToolsTaskRaiseStatusStop extends RpcRequest
{
    protected string $url = '/2/tools/task_raise/status/stop/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
