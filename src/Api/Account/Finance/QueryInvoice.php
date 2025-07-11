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
 * Name 开票-查询开票单数据（代理商版）
 * Class QueryInvoice.
 */
class QueryInvoice extends RpcRequest
{
    protected string $url = '/2/query/invoice/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
