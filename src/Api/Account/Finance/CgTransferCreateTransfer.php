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
 * Name 转账-发起转账（代理）
 * Class CgTransferCreateTransfer.
 */
class CgTransferCreateTransfer extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/create_transfer/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
