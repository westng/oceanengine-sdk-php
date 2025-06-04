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

namespace Api\JuLiangAds\DataReports\AdsProDataReports;

use Core\Profile\RpcRequest;

/**
 * 代理商竞价投放数据.
 *
 * 代理商竞价投放数据，对应方舟平台「投放-数据概览-汇总数据-竞价数据」
 */
class AgentAdvBiddingListQuery extends RpcRequest
{
    protected string $url = '/2/agent/adv/bidding/list/query/';

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
