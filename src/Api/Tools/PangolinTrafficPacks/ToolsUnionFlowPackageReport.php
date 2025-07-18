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

namespace Api\Tools\PangolinTrafficPacks;

use Core\Profile\RpcRequest;

/**
 * Name 查看rit数据.
 * 查看穿山甲广告位数据，包括付费率、消耗等数据，默认查询历史30天数据。
 * Class ToolsUnionFlowPackageReport.
 */
class ToolsUnionFlowPackageReport extends RpcRequest
{
    protected string $url = '/2/tools/union/flow_package/report/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
