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
 * Name 根据门店ID查询门店下商品ID
 * 该接口使用场景说明：
 * 通过【获取抖音主页视频】接口拉取挂载了商品锚点的视频时，需要传入商品ids。如果为推门店场景，可以通过该接口获取所推广门店下的商品ID，进而拉取到挂载了门店下商品锚点的抖音主页视频进行投放。
 * 仅创编推广目的=团购成交/门店引流/内容加热的计划时，可能涉及该接口的使用；推广目的=获取线索的计划不涉及。
 * Class LocalProductGetByPoiids.
 */
class LocalProductGetByPoiids extends RpcRequest
{
    protected string $url = '/v3.0/local/product/get_by_poiids/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
