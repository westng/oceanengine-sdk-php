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

namespace Api\JuLiangAds\Assets\Events;

use Core\Profile\RpcRequest;

/**
 * 事件管理资产查看共享范围.
 *
 * 此接口用于获取事件管理资产的共享范围信息
 */
class EventManagerShareGet extends RpcRequest
{
    protected string $url = '/v3.0/event_manager/share/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
