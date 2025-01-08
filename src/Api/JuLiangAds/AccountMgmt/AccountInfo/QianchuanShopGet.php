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

namespace Api\JuLiangAds\AccountMgmt\AccountInfo;

use core\Profile\RpcRequest;

/**
 * Name 获取店铺账户信息
 * Class QianchuanShopGet
 */
class QianchuanShopGet extends RpcRequest
{
    protected string $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/shop/get/';

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

    /**
     */
    public function check()
    {
    }
}
