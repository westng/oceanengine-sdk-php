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
 * Name 获取穿山甲广告主分流联合实验数据.
 *
 * 获取穿山甲的广告主分流的联合实验数据。
 * Class ReportRtaCusExpGet.
 */
class ReportRtaCusExpGet extends RpcRequest
{
    protected string $url = '/2/report/rta_cus_exp/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
