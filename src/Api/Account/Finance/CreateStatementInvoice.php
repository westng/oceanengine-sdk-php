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
 * Name 开票-新建开票申请单（代理商版）
 * Class CreateStatementInvoice.
 */
class CreateStatementInvoice extends RpcRequest
{
    protected string $url = '/2/create/statement_invoice/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
