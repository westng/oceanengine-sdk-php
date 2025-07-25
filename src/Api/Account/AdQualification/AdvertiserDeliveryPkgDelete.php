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
 * Name 批量删除推广产品资质
 * 该接口支持批量删除审核拒绝的投放资质（推广产品）。
 * 删除失败的原因包括2类：① 传入了审核状态≠「审核不通过」的资质id；② 广告主账户下没有该资质。
 * Class AdvertiserDeliveryPkgDelete.
 */
class AdvertiserDeliveryPkgDelete extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_pkg/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
