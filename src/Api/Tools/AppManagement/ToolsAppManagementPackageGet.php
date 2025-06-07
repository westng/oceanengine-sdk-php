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

namespace Api\Tools\AppManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 查询包解析状态.
 *
 * 查询包解析状态，用于创建包含游戏礼包码的广告计划时，【提交解析应用包任务】后，查询应用包的解析状态。
 * 当返回参数package_status包解析状态为"SUCCESS"时表示包解析已经完成。此时，您可以提交创建广告计划。
 * 如果在没有解析完成时提交广告计划可能导致游戏礼包码的原生转化卡信息展示不全。
 */
class ToolsAppManagementPackageGet extends RpcRequest
{
    protected string $url = '/2/tools/download/package/get/';

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
