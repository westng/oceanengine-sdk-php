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

namespace Api\Account\Finance;

use Core\Profile\RpcRequest;

/**
 * Name 共享钱包-查询账户对应公司下的钱包关系
 * Class SharedWalletAccountRelationGet.
 */
class SharedWalletAccountRelationGet extends RpcRequest
{
    protected string $url = '/v3.0/shared_wallet/account_relation/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
