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
 * 获取投放条件详情（通用版）.
 *
 * 该接口主要查询汽车行业投放条件信息，根据商品id查询投放条件详情。
 *
 * 查询说明：
 * 1. 查询的是广告主名下对应商品库的投放条件详情，会有广告主归属校验证
 * 2. 投放条件类型目前只支持汽车
 * 3. 只有启用的投放条件才可以在广告投放中添加
 */
class DpaAssetsDetailRead extends RpcRequest
{
    protected string $url = '/2/dpa/assets/detail/read/';

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
