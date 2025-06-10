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

namespace Api\JuLiangAds\DmpAudience\YuntuApi;

use Core\Profile\RpcRequest;

/**
 * 获取广告账户关联云图账户信息.
 *
 * 根据真实的客户adv_id 获取有权限的云图品牌列表信息，信息包括：品牌id、品牌名称、虚拟advid。
 */
class DmpBrandGetGet extends RpcRequest
{
    protected string $url = '/2/dmp/brand/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
