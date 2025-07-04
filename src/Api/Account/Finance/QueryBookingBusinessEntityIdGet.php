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
 * Name 排期—查询业务实体ID
 * Class QueryBookingBusinessEntityIdGet.
 */
class QueryBookingBusinessEntityIdGet extends RpcRequest
{
    protected string $url = '/2/query/booking/business_entity_id/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
