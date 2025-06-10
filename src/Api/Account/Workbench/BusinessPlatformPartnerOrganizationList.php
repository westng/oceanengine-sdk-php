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
 * Name 查询合作组织
 * Class BusinessPlatformPartnerOrganizationList.
 */
class BusinessPlatformPartnerOrganizationList extends RpcRequest
{
    protected string $url = '/2/business_platform/partner_organization/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
