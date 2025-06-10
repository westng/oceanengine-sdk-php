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
 * Name 获取本地推创编可用抖音号
 * Class LocalAwemeAuthorizedGet.
 */
class LocalAwemeAuthorizedGet extends RpcRequest
{
    protected string $url = '/v3.0/local/aweme/authorized/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
