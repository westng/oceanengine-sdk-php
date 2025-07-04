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

namespace Api\Account\AccountInfo;

use Core\Profile\RpcRequest;

/**
 * Name 获取千川账户类型
 * Class QianchuanAdvertiserTypeGet.
 */
class QianchuanAdvertiserTypeGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/advertiser/type/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
