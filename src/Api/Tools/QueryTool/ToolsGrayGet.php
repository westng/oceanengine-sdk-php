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
 * Name 查询白名单能力.
 *
 * 支持客户通过接口查询广告主是否命中各项灰度/白名单功能
 * Class ToolsGrayGet.
 */
class ToolsGrayGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/gray/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户ID.
     */
    protected int $advertiser_id;
}
