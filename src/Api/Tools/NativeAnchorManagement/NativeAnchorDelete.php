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

namespace Api\Tools\NativeAnchorManagement;

use Core\Profile\RpcRequest;

/**
 * Name 删除原生锚点.
 *
 * 删除原生锚点。
 * Class NativeAnchorDelete.
 */
class NativeAnchorDelete extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
