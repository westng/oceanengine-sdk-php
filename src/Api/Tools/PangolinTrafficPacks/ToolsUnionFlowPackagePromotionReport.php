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
 * Name 查看2.0rit数据.
 * Class ToolsUnionFlowPackagePromotionReport.
 */
class ToolsUnionFlowPackagePromotionReport extends RpcRequest
{
    protected string $url = '/v3.0/tools/union/flow_package/promotion/report/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
