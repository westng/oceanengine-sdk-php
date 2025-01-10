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

namespace Api\JuLiangQianChuan\AccountMgmt\AccountInfo;

use Core\Profile\RpcRequest;

/**
 * Name 获取授权时登录用户信息
 * Class UserInfo.
 */
class UserInfo extends RpcRequest
{
    protected string $url = 'https://ad.oceanengine.com/open_api/2/user/info/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
