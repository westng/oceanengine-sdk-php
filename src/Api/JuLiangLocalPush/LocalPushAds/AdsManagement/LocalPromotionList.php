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

namespace Api\JuLiangLocalPush\LocalPushAds\AdsManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取广告列表
 * 该接口暂不支持拉取 推广目的为获取线索的项目下的广告
 * Class LocalPromotionList.
 */
class LocalPromotionList extends RpcRequest
{
    protected string $url = '/v3.0/local/promotion/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
