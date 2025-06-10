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
 * 获取视频可投放转化目标.
 *
 * 获取DOU+视频可投放的转化目标列表
 */
class DouplusOptionalTargetsList extends RpcRequest
{
    protected string $url = '/v3.0/douplus/optional_targets/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
