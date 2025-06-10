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
 * 资产下创建事件.
 *
 * 此接口用于在资产下创建单个事件
 * 需要先通过【获取推广内容】接口获取要创建的资产ID（asset_id）
 * 需要先通过【获取可创建事件】接口获取到某资产下支持创建的事件ID（event_id）
 * 当资产类型是三方落地页时，同资产同事件支持多种回传方式，但XPATH不能与JSSDK和EXTERNAL_API同时存在。应用类资产只支持传入一个回传方式。
 */
class EventManagerEventsCreate extends RpcRequest
{
    protected string $url = '/2/event_manager/events/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
