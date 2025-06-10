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

namespace Api\JuLiangAds\DouPlusDelivery;

use Core\Profile\RpcRequest;

/**
 * 获取可投放视频列表.
 *
 * 获取DOU+可投视频列表
 */
class DouplusOptionalItemsList extends RpcRequest
{
    protected string $url = '/v3.0/douplus/optional_items/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
