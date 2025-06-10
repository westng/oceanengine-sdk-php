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

namespace Api\JuLiangQianChuan\AdvertisingMgmt\GlobalPromotion;

use Core\Profile\RpcRequest;

/**
 * Name 删除全域推广计划下素材
 * Class UniPromotionAdMaterialDelete.
 */
class UniPromotionAdMaterialDelete extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/ad/material/delete/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
