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
 * Name 查询代理商转账记录
 * Class AgentTransferTransactionRecord.
 */
class AgentTransferTransactionRecord extends RpcRequest
{
    protected string $url = '/2/agent/transfer/transaction_record/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
