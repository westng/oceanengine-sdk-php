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
 * Name 查询建议出价（巨量广告升级版）.
 *
 * 通过广告分析查询广告的建议出价
 * CLass ToolsBidsSuggest.
 */
class ToolsBidsSuggest extends RpcRequest
{
    protected string $url = '/v3.0/tools/bids/suggest/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
