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

namespace Account\Finance;

use Core\Profile\RpcRequest;

/**
 * Name 获取账户钱包信息
 * Class QianChuanFinanceWalletGet.
 */
class QianChuanFinanceWalletGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/finance/wallet/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
