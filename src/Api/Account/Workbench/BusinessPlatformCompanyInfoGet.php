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

namespace Api\Account\Workbench;

use Core\Profile\RpcRequest;

/**
 * Name 获取工作台（原纵横组织）下所有主体信息
 * Class BusinessPlatformCompanyInfoGet.
 */
class BusinessPlatformCompanyInfoGet extends RpcRequest
{
    protected string $url = '/v3.0/business_platform/company_info/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
