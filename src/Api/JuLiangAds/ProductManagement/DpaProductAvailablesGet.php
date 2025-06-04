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
 * 获取商品库信息.
 *
 * 该接口用于查询商品库信息。
 * 仅支持查询广告主有权限访问的商品库。
 * 支持「商品推广」的推广目的包含：应用推广（APP）、销售线索收集（LINK）、电商店铺（SHOP）、商品推广（DPA）。
 * 其中仅商品推广（DPA）支持多商品推广，其余仅支持单商品推广。
 *
 * 注意事项：
 * 1. 商品库行业类型为小说NOVEL、招商加盟RCHANTS、直播社交LIVE、教育EDUCATION、新汽车AUTO_NEW、视频咨询VIDEO的时候，不可以投放多商品广告
 * 2. 商品库行业类型为新汽车AUTO_NEW的时候，单商品和多商品推广均不可以投放
 */
class DpaProductAvailablesGet extends RpcRequest
{
    protected string $url = '/2/dpa/product/availables/';

    protected string $method = 'GET';

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
