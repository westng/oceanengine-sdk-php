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
 * 查询素材标签信息.
 *
 * 根据提供的素材 id 查询素材属性信息，目前仅支持视频素材。
 *
 * 特别注意：
 * 1. 本接口能力较久未更新，建议使用最新接口获取素材标签，请前往「获取视频素材评估标签（新版）」
 * 2. 可以获取的素材信息包括在投素材和不在投素材，查询结果不区分是否在投
 * 3. 可以搭配创建素材清理任务接口对其中的【正在投放的】问题素材进行清理
 *
 * 素材类型说明：
 * 1. 低效素材：低效素材说明文档
 * 2. 同质化素材：「同质化素材」说明文档（对外）持续更新
 *
 * 排队投放素材、未投放预计排队、挤压严重素材的区别：
 * 1. 同质化素材风险-未投放预计排队素材：不需要创编广告，素材不在投，该素材没有可投/绑定创意，不能清理
 * 2. 同质化素材风险-排队投放素材：需要创编广告，素材不在投
 * 3. 同质化挤压严重素材：需要创编广告，素材在投
 */
class FileMaterialDetail extends RpcRequest
{
    protected string $url = '/2/file/material/detail/';

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
