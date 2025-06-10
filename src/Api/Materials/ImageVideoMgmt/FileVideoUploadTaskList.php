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
 * Name 获取异步上传视频文件结果.
 *
 * 异步上传视频后生成的任务ID，可通过当前接口查询对应任务处理状态。
 *
 * 注意事项：
 * 1. 任务处理速度取决于视频链接对应连山云素材服务速率及任务量级
 * 2. 速率过低或大文件堆积量级过多，时效会有一定延迟
 * 3. 正常会在3分钟内完成
 * Class FileVideoUploadTaskList.
 */
class FileVideoUploadTaskList extends RpcRequest
{
    protected string $url = '/2/file/video/upload_task/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
