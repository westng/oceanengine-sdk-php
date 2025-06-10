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

namespace Api\JuLiangQianChuan\FreestylePushPlcmnt;

use Core\Profile\RpcRequest;

/**
 * Name 查询随心推使用中订单配额信息
 * Class QianchuanAwemeOrderQuotaGet.
 */
class QianchuanAwemeOrderQuotaGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme/order/quota/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
