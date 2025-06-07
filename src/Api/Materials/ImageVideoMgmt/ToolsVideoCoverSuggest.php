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
 * 获取视频智能封面.
 *
 * 通过此接口，用户可以获取针对素材视频推荐的智能封面。智能封面是通过提取视频关键帧筛选出推荐封面，帮助发现视频内优质封面素材。
 *
 * 特别注意：
 * 1. 智能封面不是实时获取，而需要先根据status判断封面获取的状态，然后再进行获取视频封面
 * 2. 新上传素材存在同步延迟情况，建议等待2-3分钟再尝试操作获取视频智能封面
 * 3. 获取封面素材仅用于当前广告主投放使用，不支持推送
 */
class ToolsVideoCoverSuggest extends RpcRequest
{
    protected string $url = '/2/tools/video_cover/suggest/';

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
