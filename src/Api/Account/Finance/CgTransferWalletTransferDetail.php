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
 * Name 资金共享-查询转账单信息
 * Class CgTransferWalletTransferDetail.
 */
class CgTransferWalletTransferDetail extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/wallet/transfer/detail/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
