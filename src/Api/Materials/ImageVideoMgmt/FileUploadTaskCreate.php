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
 * 异步上传视频文件.
 *
 * 将视频文件通过连山云素材服务上传后获取到视频文件链接，再将获取到的连山云视频文件url作为入参的video_url
 * 通过素材库提供的视频上传接口进行文件上传。
 *
 * 特别注意：
 * 1. 仅支持开发者购置连山云素材服务上传生成的tos链接/连山点播云产品的视频链接上传
 * 2. 不支持其他三方链接地址
 */
class FileUploadTaskCreate extends RpcRequest
{
    protected string $url = '/2/file/upload_task/create/';

    protected string $method = 'POST';

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
