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
 * 代理商消耗报表数据.
 *
 * 代理商消耗报表查询，对应方舟平台侧「商务-流水查询-消耗报表」数据
 */
class AgentAdvCostReportListQuery extends RpcRequest
{
    protected string $url = '/2/agent/adv/cost_report/list/query/';

    protected string $method = 'POST';

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
