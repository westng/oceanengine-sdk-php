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

namespace Api\Account\AccountRel;

use Core\Profile\RpcRequest;

/**
 * Name 获取已授权的账户（店铺/代理商/组织）
 * 此接口用于获取已经授权的账号列表，账号包含了店铺、代理商、组织等角色；
 * 一次授权多个账号，共用一个Access Token; 一个Access Token可用于操作授权的多个账号；
 * Access token 与账户之间对应关系不要弄混，以免后续调用广告主相关接口报No permission错误；
 * Class Oauth2AdvertiserGet.
 */
class Oauth2AdvertiserGet extends RpcRequest
{
    protected string $method = 'GET';

    protected string $url = '/oauth2/advertiser/get/';

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
