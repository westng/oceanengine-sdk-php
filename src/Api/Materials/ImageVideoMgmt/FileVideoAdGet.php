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
 * 获取同主体下广告主视频素材.
 *
 * 通过此接口，用户可以查询同主体下的广告主视频信息。
 *
 * 接口权限：查看视频的信息，获取视频md5、宽高、预览地址等内容，合理利用还可以搭建自己的素材库进行素材的管理。
 *
 * 特别注意：
 * 1. 为保证接口使用的安全性避免调取他人的视频信息，该接口只可用于查询自己公司下的视频信息
 * 2. 需查询的视频ID所属广告主账号的主体需与APPID对应开发者的主体保持一致，才可获取到图片的信息
 * 3. 如果开发者账号还未完成企业认证也将无法调用，请先完成企业认证
 */
class FileVideoAdGet extends RpcRequest
{
    protected string $url = '/2/file/video/ad/get/';

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
