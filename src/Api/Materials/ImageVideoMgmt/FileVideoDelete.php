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

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 批量删除视频素材.
 *
 * 通过此接口，用户可以对素材视频进行批量删除。
 *
 * 特别注意：
 * 1. 当素材删除失败时，会展示在video_id列表
 * 2. 不在此列表内的素材表示删除成功
 * Class FileVideoDelete.
 */
class FileVideoDelete extends RpcRequest
{
    protected string $url = '/2/file/video/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 素材归属的广告主.
     */
    protected int $advertiser_id;

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

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
