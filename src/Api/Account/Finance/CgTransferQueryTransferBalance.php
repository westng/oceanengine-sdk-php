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
 * Name 转账-查询账户转账余额（代理）
 * Class CgTransferQueryTransferBalance.
 */
class CgTransferQueryTransferBalance extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/query_transfer_balance/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
