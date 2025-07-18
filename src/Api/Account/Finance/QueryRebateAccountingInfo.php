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
 * Name 返点-查询返点核算流水
 * Class QueryRebateAccountingInfo.
 */
class QueryRebateAccountingInfo extends RpcRequest
{
    protected string $url = '/2/query/rebate_accounting_info/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
