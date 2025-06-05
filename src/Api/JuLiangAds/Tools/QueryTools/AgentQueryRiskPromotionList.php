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

namespace Api\JuLiangAds\Tools\QueryTools;

use Core\Profile\RpcRequest;

/**
 * 代理商查询广告违规信息.
 *
 * 支持获取在投放中图片、视频和落地页被拒审的巨量广告信息，仅展示广告拒审时的信息
 * 支持获取广告中未过审的素材信息以及这个素材还在同代理商的哪些广告下（只披露近7天有消耗的关联广告）
 */
class AgentQueryRiskPromotionList extends RpcRequest
{
    protected string $url = '/2/agent/query/risk_promotion_list/';

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
