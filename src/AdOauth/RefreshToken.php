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

namespace AdOauth;

use Core\Profile\RpcRequest;

class RefreshToken extends RpcRequest
{
    protected string $method = 'POST';

    protected string $url = '/oauth2/refresh_token/';

    protected string $app_id;

    protected string $secret;

    protected string $grant_type;

    protected string $refresh_token;
}
