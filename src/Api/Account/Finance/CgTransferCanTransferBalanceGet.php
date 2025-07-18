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
 * Name 工作台转账-获取最大可转余额
 * Class CgTransferCanTransferBalanceGet.
 */
class CgTransferCanTransferBalanceGet extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/can_transfer_balance/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
