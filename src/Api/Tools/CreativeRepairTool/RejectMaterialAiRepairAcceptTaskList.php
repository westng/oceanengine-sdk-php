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

namespace Api\Tools\CreativeRepairTool;

use Core\Profile\RpcRequest;

/**
 * Name 获取采纳素材修复建议任务结果.
 *
 * 注意：本接口为异步接口，需与创建采纳「拒审素材修复建议」任务API搭配使用
 * 您可通过本接口查询采纳的最新状态
 * Class RejectMaterialAiRepairAcceptTaskList.
 */
class RejectMaterialAiRepairAcceptTaskList extends RpcRequest
{
    protected string $url = '/v3.0/reject_material/ai_repair_accept_task/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
