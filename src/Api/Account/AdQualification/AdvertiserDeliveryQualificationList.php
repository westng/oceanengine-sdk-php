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
 * Name 获取投放资质（新版）
 * 用于查询账户投放资质
 * Class AdvertiserDeliveryQualificationList.
 */
class AdvertiserDeliveryQualificationList extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_qualification/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
