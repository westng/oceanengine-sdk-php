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

namespace Api\JuLiangLocalPush\LocalPushAds\AdsManagement;

use Core\Profile\RpcRequest;

/**
 * Name 更新广告
 * 本接口为全量更新，每次更新会对所有参数进行调整，若希望进行局部更新，请先通过获取广告列表接口前置获取广告的详情信息再进行更新
 * Class LocalPromotionUpdate.
 */
class LocalPromotionUpdate extends RpcRequest
{
    protected string $url = '/v3.0/local/promotion/update/';

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
