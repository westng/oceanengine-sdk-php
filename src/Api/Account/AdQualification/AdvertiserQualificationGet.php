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
 * Name 获取主体资质（新版）
 * 获取广告主的主体资质信息为全量接口，会返回广告主所有主体资质，注意如果广告主没有任何主体资质，这个接口的data将会是空。
 * Class AdvertiserQualificationGet.
 */
class AdvertiserQualificationGet extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/qualification/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
