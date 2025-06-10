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
 * Name 获取清理任务列表.
 *
 * 返回已创建的低效/同质视频素材清理任务列表
 * Class FileVideoMaterialClearTaskGet.
 */
class FileVideoMaterialClearTaskGet extends RpcRequest
{
    protected string $url = '/2/file/video/material/clear_task/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
