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

namespace Api\JuLiangLocalPush\LocalPushAds\ProjectManagement;

use Core\Profile\RpcRequest;

/**
 * Name 根据多门店ID拉取门店ID
 * 根据多门店ID拉取门店ID
 * Class LocalMultiPoiIdPoiIdsGet.
 */
class LocalMultiPoiIdPoiIdsGet extends RpcRequest
{
    protected string $url = '/v3.0/local/multi_poi_id/poi_ids/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
