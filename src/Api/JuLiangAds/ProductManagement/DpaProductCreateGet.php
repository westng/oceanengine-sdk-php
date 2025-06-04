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

namespace Api\JuLiangAds\ProductManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 【新版】创建DPA商品（无商品id）.
 *
 * 此接口适用于：
 * 创建商品，并由媒体侧自动生成商品id
 *
 * 注意：
 * - 若希望基于已有商品id创建商品或更新商品，请使用【创建DPA商品（已有商品id）/修改DPA商品】接口
 * - 需要根据不同的商品库类型入参对应的商品详情，包括：
 *   - 商品库基础字段
 *   - 落地页
 *   - 品牌
 *   - 商户
 *   - 价格
 *   - 其他字段信息
 * - 所有字段均包含在【product_info】结构体下
 * - 需要注意不同类型商品库的入参差异
 */
class DpaProductCreateGet extends RpcRequest
{
    protected string $url = '/2/dpa/product/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;

    /**
     * @return $this
     */
    public function setArgs(mixed $args): static
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
