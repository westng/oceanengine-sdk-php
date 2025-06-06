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

namespace Api\JuLiangQianChuan\AccountMgmt\AccountRel;

use Core\Profile\RpcRequest;

/**
 * Name 获取已授权的账户（店铺/代理商/组织）
 * Class AdvertiserGet.
 */
class AdvertiserGet extends RpcRequest
{
    protected string $method = 'GET';

    protected string $url = '/oauth2/advertiser/get/';

    protected string $cotent_type = 'application/json';

    protected string $app_id;

    protected string $secret;

    protected string $access_token;
}
