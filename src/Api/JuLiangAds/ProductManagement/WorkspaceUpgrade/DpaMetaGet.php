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
 * Get product library metadata.
 */
class DpaMetaGet extends RpcRequest
{
    protected string $url = '/v3.0/dpa/ebp/meta/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
