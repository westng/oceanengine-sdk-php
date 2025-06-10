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

namespace Api\JuLiangAds\DmpAudience;

use Core\Profile\RpcRequest;

/**
 * 人群包列表.
 *
 * 通过此接口你可以查询广告主下存在的人群包列表和信息。信息包括人群包的id，可用状态，来源，覆盖人群等。
 */
class DmpCustomAudienceSelectGet extends RpcRequest
{
    protected string $url = '/2/dmp/custom_audience/select/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
