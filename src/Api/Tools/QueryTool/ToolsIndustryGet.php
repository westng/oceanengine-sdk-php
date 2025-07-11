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
 * Name 获取行业列表
 * Class ToolsIndustryGet.
 */
class ToolsIndustryGet extends RpcRequest
{
    protected string $url = '/2/tools/industry/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
