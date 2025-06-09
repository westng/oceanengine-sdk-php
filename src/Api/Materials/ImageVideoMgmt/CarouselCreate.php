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
 * Name 上传图文素材.
 *
 * 利用图片和音频塑造图文。图文是一种创意内容体裁，在包含多张图片和一段背景音乐，支持自动轮播图片。
 *
 * 使用说明：
 * 1. 通过上传广告图片接口按顺序上传图文素材中的图片，获取图片id
 * 2. 通过上传图文内音频素材接口上传音频（audio_file或audio_url），获取音频id（audio_id）
 * 3. 利用上述两步的图片、音频id塑造图文，获取出参图文mid
 * 4. 不同图片顺序对应不同的图文mid（即接口应答参数中的carousel_id）
 * Class CarouselCreate.
 */
class CarouselCreate extends RpcRequest
{
    protected string $url = '/2/carousel/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
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
