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
 * 终止订单接口.
 *
 * 可批量终止DOU+在投订单
 *
 * 注：此接口白名单管控，请联系巨量引擎销售开通
 */
class DouplusOrderClose extends RpcRequest
{
    protected string $url = '/v3.0/douplus/order/close/';

    protected string $method = 'POST';

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
