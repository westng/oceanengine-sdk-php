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
 * Name 创建采纳「拒审素材修复建议」任务.
 *
 * 注意：本接口为异步接口，需与「获取素材修复建议采纳结果」接口搭配使用
 * 一次传入50个修复id，从创建采纳任务→采纳完成，时效预估在1分钟以内
 * Class RejectMaterialAiRepairAcceptTaskCreate.
 */
class RejectMaterialAiRepairAcceptTaskCreate extends RpcRequest
{
    protected string $url = '/v3.0/reject_material/ai_repair_accept_task/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
