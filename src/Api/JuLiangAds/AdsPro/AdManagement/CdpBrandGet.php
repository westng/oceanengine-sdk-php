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

namespace Api\JuLiangAds\AdsPro\AdManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取关联云图的广告主账户信息
 * Class CdpBrandGet.
 */
class CdpBrandGet extends RpcRequest
{
    protected string $url = '/v3.0/cdp/brand/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
     */
    protected int $advertiser_id;
}
