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

namespace Api\JuLiangAds\SiteBuilder\OrangePages;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 建站工具-建站复制（跨账户）.
 *
 * 通过此接口，用户可以实现站点的转赠功能，将某一广告主的站点复制给其他特定的广告主，
 * 转赠成功后，被转增的广告主账户下会新增一个站点id（内容同原站点）。
 * 不限制主体，同广告主不能进行转赠操作。
 *
 * 用户在传入请求参数site_ids站点id列表时，请确保id的正确性，存在错误将导致转赠全部失败！
 */
class ToolsSiteHandsel extends RpcRequest
{
    protected string $url = '/2/tools/site/handsel/';

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
