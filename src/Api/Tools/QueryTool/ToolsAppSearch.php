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

use Core\Profile\RpcRequest;

/**
 * Name 查询应用信息.
 *
 * 如果在创建计划时你需要设置APP行为定向，那么可以使用此接口搜索对应的APP的ID
 * Class ToolsAppSearch.
 */
class ToolsAppSearch extends RpcRequest
{
    protected string $url = '/2/tools/app_search/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
