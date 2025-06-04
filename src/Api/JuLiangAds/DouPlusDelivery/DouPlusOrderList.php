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

namespace Api\JuLiangAds\DouPlusDelivery;

use Core\Profile\RpcRequest;

/**
 * 查询DOU+订单列表.
 *
 * 查询DOU+订单属性
 *
 * 近期更新：
 * 2024/1/11，请求参数新增排序条件order_by_field、order_by_type参数，支持按照订单ID排序
 */
class DouPlusOrderList extends RpcRequest
{
    protected string $url = '/v3.0/douplus/order/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

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
}
