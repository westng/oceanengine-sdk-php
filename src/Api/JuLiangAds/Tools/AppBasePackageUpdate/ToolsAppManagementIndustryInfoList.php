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

namespace Api\JuLiangAds\Tools\AppBasePackageUpdate;

use Core\Profile\RpcRequest;

/**
 * 获取应用细分分类及题材标签.
 *
 * 获取应用细分分类及题材标签「支持所有账户体系」，查询所有应用细分分类及题材标签情况。
 */
class ToolsAppManagementIndustryInfoList extends RpcRequest
{
    protected string $url = '/2/tools/app_management/industry_info/list/';

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
}
