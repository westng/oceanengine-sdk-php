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
 * Name 获取拒审素材修复建议.
 *
 * 默认返回最近7天、未采纳的修复建议，超过7天有效期的修复建议会失效（接口不会再返回）
 * 接口应答参数中拒审原视频素材的预览地址（preview_url）、修复后视频封面地址（ai_repair_video_cover_id）、
 * 修复后视频预览地址（ai_repair_preview_url）开启同主体校验，需要广告主授权时勾选敏感物料授权 /
 * 开发者主体&广告主主体一致，方可正常获取
 * 本接口对应支持SPI事件（AD拒审素材修复成功事件），在系统完成拒审素材修复后，您可第一时间接收通知
 * Class RejectMaterialAiRepairGet.
 */
class RejectMaterialAiRepairGet extends RpcRequest
{
    protected string $url = '/v3.0/reject_material/ai_repair/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
