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

namespace Api\Tools\BehavioralIntMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 获取行为兴趣推荐关键词
 * Class ToolsInterestActionKeywordSuggest.
 */
class ToolsInterestActionKeywordSuggest extends RpcRequest
{
    protected string $url = '/2/tools/interest_action/keyword/suggest/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
