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
 * Name 获取视频素材.
 *
 * 通过此接口，用户可以获取经过一定条件过滤后的广告主下创意素材库对应的视频及视频信息。
 *
 * 特别注意：
 * 1. 为保证接口使用的安全性，避免调取他人的图片信息，该接口针对素材URL的字段仅查询自己广告主下的素材才会返回
 * 2. 需查询的广告主账号的主体需与APPID对应开发者的主体保持一致，才可获取到素材的预览URL的信息
 * 3. 否则会提示："素材所属主体与开发者主体不一致无法获取URL"
 * 4. 第三方获取敏感物料信息可在授权时申请广告主授权敏感物料权限
 *
 * 过滤规则：
 * 1. 对素材视频进行过滤的时候，video_ids（视频ID）、material_ids（素材ID）、signatures（视频的md5值）只能选择一个进行过滤
 * 2. 获取视频素材数据量在100w以内时支持全量获取
 * Class FileVideoGet.
 */
class FileVideoGet extends RpcRequest
{
    protected string $url = '/2/file/video/get/';

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
