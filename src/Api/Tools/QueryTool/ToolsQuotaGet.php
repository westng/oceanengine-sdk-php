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

namespace Api\Tools\QueryTool;

use Core\Profile\RpcRequest;

/**
 * Name 查询在投计划配额.
 *
 * 该接口用于查询广告账户的在投计划配额和使用进度
 * CLass ToolsQuotaGet.
 */
class ToolsQuotaGet extends RpcRequest
{
    protected string $url = '/2/tools/quota/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
