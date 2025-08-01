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
 * Name 返点-查询返点流水
 * Class QueryRebateBalance.
 */
class QueryRebateBalance extends RpcRequest
{
    protected string $url = '/2/query/rebate_balance/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
