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
 * Name 删除全域计划下商品
 * Class QianchuanUniPromotionAdProductDelete.
 */
class QianchuanUniPromotionAdProductDelete extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/ad/product/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 千川广告主id.
     */
    protected int $advertiser_id;
}
