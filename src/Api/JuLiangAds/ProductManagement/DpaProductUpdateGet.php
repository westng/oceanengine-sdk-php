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
 * 新版】创建DPA商品（已有商品id）/修改DPA商品.
 *
 * 此接口适用于：
 * 1. 基于已有商品id创建商品：广告主侧已有商品id，希望媒体侧直接该商品id作为商品索引
 * 2. 更新商品：已知某商品的商品id，对已有的商品信息进行修改
 *
 * 注意：
 * - 若希望创建商品并由媒体侧自动生成商品id，请使用【创建DPA商品（无商品id）】接口
 * - 请求参数中必须填写商品库ID和商品ID
 */
class DpaProductUpdateGet extends RpcRequest
{
    protected string $url = '/2/dpa/product/update/';

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
