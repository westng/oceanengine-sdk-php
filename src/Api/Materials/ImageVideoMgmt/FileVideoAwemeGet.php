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
 * Name 获取抖音主页视频.
 *
 * 根据一个抖音号id，获取其抖音主页下的视频的id。
 *
 * 特别注意：
 * 1. 仅能获取抖音主页公开视频
 * 2. 通过page分页方式拉取视频时，最多只能获取前150个视频
 * 3. 超过150个视频时，请通过filtering入参抖音视频链接获取视频id，或游标方式查询
 * Class FileVideoAwemeGet.
 */
class FileVideoAwemeGet extends RpcRequest
{
    protected string $url = '/2/file/video/aweme/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
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
