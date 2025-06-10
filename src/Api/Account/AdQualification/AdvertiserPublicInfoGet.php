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
 * Name 获取广告主公开信息.
 * 获取广告主账户基础信息，无需申请权限
 * Class AdvertiserPublicInfoGet.
 */
class AdvertiserPublicInfoGet extends RpcRequest
{
    protected string $url = '/2/advertiser/public_info/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
