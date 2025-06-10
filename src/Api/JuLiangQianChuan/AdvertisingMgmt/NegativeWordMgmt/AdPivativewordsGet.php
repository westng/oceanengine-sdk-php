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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\NegativeWordMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 获取否定词列表
 * Class AdPivativewordsGet.
 */
class AdPivativewordsGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/ad/pivativewords/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
