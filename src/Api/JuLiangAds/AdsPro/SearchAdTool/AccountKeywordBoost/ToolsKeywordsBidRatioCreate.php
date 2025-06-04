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

namespace Api\JuLiangAds\AdsPro\SearchAdTool\AccountKeywordBoost;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 设置优词提量系数和生效维度.
 *
 * 需满足条件：
 * 1. 项目未被删除
 * 2. 广告类型仅支持搜索直投（不支持搜索dpa广告，即landing_type = DPA && ad_type = SEARCH）
 * 3. 出价方式为CPA或OCPM且未设置深度出价
 * 4. 优词设置仅支持全部成功/全部失败
 */
class ToolsKeywordsBidRatioCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/keywords_bid_ratio/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
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
