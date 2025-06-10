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

namespace Api\JuLiangAds\ProductManagement;

use Core\Profile\RpcRequest;

/**
 * 查询短剧可投状态.
 *
 * 通过短剧alblumID查询短剧可投状态。
 *
 * 特别注意：
 * 1. 请求本接口时需要使用APP Access Token
 * 2. 通过【获取APP Access Token】接口获取token
 * 3. 使用App-Access-Token作为请求头，而不是普通的Access Token
 */
class DpaAlbumStatusGet extends RpcRequest
{
    protected string $url = '/v3.0/dpa/album_status/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
