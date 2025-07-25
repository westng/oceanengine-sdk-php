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
 * Name 工作台转账-获取可转列表
 * Class CgTransferCanTransferTargetList.
 */
class CgTransferCanTransferTargetList extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/can_transfer_target/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
