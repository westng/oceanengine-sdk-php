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
 * Name 获取广告主信息.
 * 获取广告主账户详细信息
 * Class AdvertiserInfo.
 */
class AdvertiserInfo extends RpcRequest
{
    protected string $url = '/2/advertiser/info/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
