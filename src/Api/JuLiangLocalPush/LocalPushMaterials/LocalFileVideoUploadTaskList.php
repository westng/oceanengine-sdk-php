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

namespace Api\JuLiangLocalPush\LocalPushMaterials;

use Core\Profile\RpcRequest;

/**
 * Name 查询异步上传本地推视频结果
 * 异步上传视频后生成的任务ID，可通过当前接口查询对应任务处理状态
 * 任务处理速度取决于视频链接对应连山云素材服务速率及任务量级，速率过低或大文件堆积量级过多，时效会有一定延迟，正常会在3分钟内完成
 * Class LocalFileVideoUploadTaskList.
 */
class LocalFileVideoUploadTaskList extends RpcRequest
{
    protected string $url = '/v3.0/local/file/video/upload_task/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * @return $this
     */
    public function setArgs(mixed $args): static
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }
}
