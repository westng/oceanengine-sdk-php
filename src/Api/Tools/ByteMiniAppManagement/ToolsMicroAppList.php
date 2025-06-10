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

namespace Api\Tools\ByteMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取字节小程序.
 *
 * 获取巨量工作台上字节小程序资产列表。
 * Class ToolsMicroAppList.
 */
class ToolsMicroAppList extends RpcRequest
{
    protected string $url = '/v3.0/tools/micro_app/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
