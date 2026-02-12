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
 * Batch update DPA product status.
 */
class DpaProductStatusBatchUpdate extends RpcRequest
{
    protected string $url = '/v3.0/dpa/ebp/product_status/batch_update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
