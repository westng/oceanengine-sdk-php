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

namespace Api\Tools\RTAStrategy;

use Core\Profile\RpcRequest;

/**
 * Name 获取穿山甲渠道RTA联合实验数据.
 *
 * 该接口用于查询穿山甲渠道的RTA联合实验数据。
 * Class ReportRtaExpGet.
 */
class ReportRtaExpGet extends RpcRequest
{
    protected string $url = '/2/report/rta_exp/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
