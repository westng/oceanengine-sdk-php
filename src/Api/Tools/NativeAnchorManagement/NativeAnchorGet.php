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

namespace Api\Tools\NativeAnchorManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 获取原生锚点列表.
 *
 * 获取账户下的原生锚点列表，不同锚点的详情信息请前往「获取原生锚点详情」查询。
 * 近期更新：
 * 2023/12/27，应答参数新增返回anchor_share_type，支持您区分锚点的共享类型（自有或被共享）。
 * Class NativeAnchorGet.
 */
class NativeAnchorGet extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告账户ID.
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
