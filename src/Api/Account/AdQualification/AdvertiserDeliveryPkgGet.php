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

namespace Api\Account\AdQualification;

use Core\Profile\RpcRequest;

/**
 * Name 获取推广产品资质
 * 用于查询广告主以推广产品形式提交的投放资质，可以获取到资质审核状态等信息
 * Class AdvertiserDeliveryPkgGet.
 */
class AdvertiserDeliveryPkgGet extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_pkg/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
