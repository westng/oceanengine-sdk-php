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

namespace Api\JuLiangAds\QingniaoLeads\CouponComponent;

use Core\Profile\RpcRequest;

/**
 * 上传券码.
 *
 * 通过此接口，你可以上传优惠券的券码。调用此接口前，需要先创建卡券，获取优惠券id，优惠券的券码类型需要为商家上传券码类型。
 */
class ClueCouponCodeUpload extends RpcRequest
{
    protected string $url = '/2/clue/coupon/code/upload/';

    protected string $method = 'POST';

    protected string $content_type = 'multipart/form-data';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
