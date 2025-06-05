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
 * 批量获取锚点预览url.
 *
 * 获取锚点的预览链接，您需将返回的预览url转成二维码，使用抖音APP扫码才可预览。
 * 预览url在您请求接口时生成，可预览多次，有效期24小时。
 * 只有当锚点关联广告时，才可查询到预览url。
 */
class NativeAnchorQrcodePreviewGet extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/qrcode_preview/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户ID.
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
