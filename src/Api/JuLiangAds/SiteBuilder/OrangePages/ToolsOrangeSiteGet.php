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
 * 通过优化目标获取橙子落地页站点信息.
 *
 * 本接口支持获取优化目标关联橙子建站站点列表，方便您通过API创编广告。
 *
 * 注意：本接口暂不支持区分橙子落地页是账户下自建的还是被共享的，您可通过以下方式进行区分：
 * 步骤1：通过【获取橙子建站站点列表】查询账户下全量站点信息，该接口支持区分站点来源（账户创建站点 or 被共享站点）
 * 步骤2：调用本接口，查询external_action、deep_external_action关联的橙子落地页，根据步骤1获取结果在本地自行区分
 */
class ToolsOrangeSiteGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/orange_site/get/';

    protected string $method = 'GET';

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
