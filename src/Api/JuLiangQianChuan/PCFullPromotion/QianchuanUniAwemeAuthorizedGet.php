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

namespace Api\JuLiangQianChuan\PCFullPromotion;

use Core\Profile\RpcRequest;

/**
 * Name 获取可投全域推广抖音号列表
 * Class QianchuanUniAwemeAuthorizedGet.
 */
class QianchuanUniAwemeAuthorizedGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_aweme/authorized/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 千川广告主id.
     */
    protected int $advertiser_id;
}
