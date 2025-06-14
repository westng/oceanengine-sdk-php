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
 * Name 查询本地推创编可用人群包
 * Class LocalCustomAudienceGet.
 */
class LocalCustomAudienceGet extends RpcRequest
{
    protected string $url = '/v3.0/local/custom_audience/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
