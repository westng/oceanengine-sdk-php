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

namespace Api\JuLiangAds\ProductManagement\WorkspaceUpgrade;

use Core\Profile\RpcRequest;

/**
 * Query playlet source video authorization status.
 */
class DpaPlayletAuthGet extends RpcRequest
{
    protected string $url = '/v3.0/dpa/ebp/playlet/auth/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
