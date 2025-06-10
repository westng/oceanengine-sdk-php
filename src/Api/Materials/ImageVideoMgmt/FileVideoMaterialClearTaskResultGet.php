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
 * Name 下载清理任务结果.
 *
 * 根据adv_id和clear_id返回低效/同质视频素材的清理结果，与「创建素材清理任务」、「获取清理任务列表」接口配合使用
 * CLass FileVideoMaterialClearTaskResultGet.
 */
class FileVideoMaterialClearTaskResultGet extends RpcRequest
{
    protected string $url = '/2/file/video/material/clear_task_result/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
