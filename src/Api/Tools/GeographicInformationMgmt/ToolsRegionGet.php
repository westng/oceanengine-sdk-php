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

namespace Api\Tools\GeographicInformationMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 获取地域列表
 * Class ToolsRegionGet.
 */
class ToolsRegionGet extends RpcRequest
{
    protected string $url = '/2/tools/region/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
