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

namespace Api\Tools\QueryTool;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 获取创编可用的抖音图文素材.
 *
 * 该接口用于获取「巨量广告平台」创建广告时可用的抖音图文素材，您可以获取抖音图文素材的item_id，在广告创编接口使用
 * Class FileCarouselAwemeGet.
 */
class FileCarouselAwemeGet extends RpcRequest
{
    protected string $url = '/v3.0/file/carousel/aweme/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 巨量广告广告主账户ID.
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
