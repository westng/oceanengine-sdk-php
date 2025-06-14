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
 * Name 获取绑定的抖音号.
 *
 * 此接口可以帮助查询广告主账户当前绑定的抖音号信息
 * Class ToolsIesAccountSearch.
 */
class ToolsIesAccountSearch extends RpcRequest
{
    protected string $url = '/2/tools/ies_account_search/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
