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

namespace Api\JuLiangLocalPush\LocalPushAds\ProjectManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取可投商品列表
 * 获取商品列表
 * Class LocalProductGet.
 */
class LocalProductGet extends RpcRequest
{
    protected string $url = '/v3.0/local/product/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
