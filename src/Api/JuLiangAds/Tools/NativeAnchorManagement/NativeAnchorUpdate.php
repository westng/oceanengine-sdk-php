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

namespace Api\JuLiangAds\Tools\NativeAnchorManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 更新原生锚点.
 *
 * 该接口暂不支持更新「高级在线预约」、「外跳」、「字节小程序」锚点。
 * 近期更新：
 * 2023/12/27，请求参数中product_price类型调整为double，允许2位小数，原按整数型传入不受影响。
 * 2024/03/26，请求参数中net_service_anchor下net_service_type新增枚举WECHAT_EXTERNAL_URL，新增wechat_external_url，支持设置网服锚点推广内容= 跳转微信，跳转场景= 跳转微信链接。
 */
class NativeAnchorUpdate extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/update/';

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
