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
 * 事件管理资产取消共享.
 *
 * 此接口用于取消事件管理资产的共享
 */
class EventManagerShareCancel extends RpcRequest
{
    protected string $url = '/v3.0/event_manager/share/cancel/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
