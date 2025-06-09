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
 * Name 获取视频素材评估标签（新版）.
 *
 * 本接口是「获取素材标签列表」、「获取素材标签信息」接口的升级版，支持查询账户下视频库的素材评估标签。
 *
 * 新接口扩展能力：
 * 1. account_id支持4类平台账户：巨量广告/巨量千川/工作台（组织）/方舟
 * 2. 工作台账户维度：可获取查询「资产」-「视频库」下所有视频素材的评估标签
 * 3. 方舟账户维度：可获取方舟代理公司下的视频素材评估标签
 * 4. 支持查询素材存在搬运风险标签
 *
 * 特别注意：
 * 1. 搬运授权保护的维度为广告账户，请使用巨量广告/巨量千川账户查询该标签
 * 2. 工作台/方舟账户维度下「存在搬运风险」标签，仅代表一个素材在工作台/方舟下的某个广告账户下存在搬运风险，暂不支持查询关联账户信息
 * 3. 目前仅支持视频素材，可以获取的素材信息包括在投素材和不在投素材，查询结果不区分是否在投
 * 4. 巨量广告或千川的「低效素材」、「同质化挤压严重」、「同质化排队素材」可搭配「创建素材清理任务」/「获取清理任务列表」/「下载清理任务结果」3个素材清理接口使用
 *
 * 同质化素材标签说明：
 * 1. 同质化素材风险-挤压严重素材：该类素材没有可投/绑定创意，不能清理，素材不在广告下，素材不在投
 * 2. 同质化素材风险-排队投放素材：可清理同质化排队素材，素材在广告下，素材不在投
 * 3. 同质化素材风险-未投放预计排队素材：可清理同质化挤压严重素材，素材在广告下，素材在投
 * CLass FileMaterialAttributesList.
 */
class FileMaterialAttributesList extends RpcRequest
{
    protected string $url = '/2/file/material_attributes/list/';

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
