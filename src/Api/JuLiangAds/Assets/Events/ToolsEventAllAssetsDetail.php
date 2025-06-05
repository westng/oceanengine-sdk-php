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

namespace Api\JuLiangAds\Assets\Events;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 获取已创建资产详情（新）.
 *
 * 本接口为巨量引擎开放平台2024年6月5日新增接口，接口能力覆盖旧接口「获取已创建资产列表」，且新增支持以下能力：
 * 支持获取橙子落地页TETRIS_EXTERNAL、应用APP类型的资产详情信息
 * 可通过「获取账户下资产列表」接口获取资产列表，并于本接口通过资产ID筛选查询资产详情
 * 「获取已创建资产列表」接口即将于8月6日下线，可切换至本接口获取资产详情
 * 应答参数返回的资产范围如下：
 * 仅支持查询账户下创建以及共享中状态、未删除的资产详情，共享失败的资产不支持查询
 * 账户下不返回已删除资产的资产详情信息
 */
class ToolsEventAllAssetsDetail extends RpcRequest
{
    protected string $url = '/2/tools/event/all_assets/detail/';

    protected string $method = 'GET';

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
