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
 * 获取事件资产下的监测链接组.
 *
 * 此接口用于获取事件资产下的监测链接
 */
class EventManagerTrackUrlGet extends RpcRequest
{
    protected string $url = '/2/event_manager/track_url/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
