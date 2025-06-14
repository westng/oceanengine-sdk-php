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
 * Name 资金共享-共享钱包信息查询
 * Class SharedWalletMainWalletGet.
 */
class SharedWalletMainWalletGet extends RpcRequest
{
    protected string $url = '/v3.0/shared_wallet/main_wallet/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
