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

namespace Api\JuLiangQianChuan\AccountMgmt\AccountInfo;

use Core\Profile\RpcRequest;

/**
 * Name 获取千川广告账户基础信息
 * Class AdvertiserPublicInfo
 */
class AdvertiserPublicInfo extends RpcRequest
{
    protected string $url = 'https://ad.oceanengine.com/open_api/2/advertiser/public_info/';

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