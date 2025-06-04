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

namespace Api\JuLiangAds\AssetManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 创建素材清理任务.
 *
 * 创建低效/同质素材清理任务的异步接口，最多同时创建10个运行中的清理任务，配合「获取清理任务列表」、「下载清理任务结果」接口使用
 *
 * 清理说明：
 * 1. 清理是暂停该问题素材/该问题素材关联的创意，不是删除素材，也不会影响到计划下其他在投素材/创意
 * 2. 如果广告计划下都是低效素材，使用清理工具后低效素材都会被暂停，但计划正常投放
 * 3. 能够清理到的素材范围是当前【正在投放中的素材】，不在投素材不属于可以被清理的素材范围，即使传入也无法进行清理
 *
 * 素材类型说明：
 * 1. 低效素材：低效素材说明文档
 * 2. 同质化素材：「同质化素材」说明文档（对外）持续更新
 */
class FileVideoMaterialClearTaskCreate extends RpcRequest
{
    protected string $url = '/2/file/video/material/clear_task/create/';

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
