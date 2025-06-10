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

namespace Api\Tools\GlobalPlanningTool;

use Core\Profile\RpcRequest;

/**
 * Name 获取调控任务列表
 * Class QianChuanAdControlTaskList.
 */
class QianChuanAdControlTaskList extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/ad/control_task/list/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
