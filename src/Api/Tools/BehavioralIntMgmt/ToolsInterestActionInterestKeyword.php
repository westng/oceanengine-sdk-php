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
 * Name 兴趣关键词查询
 * Class ToolsInterestActionInterestKeyword.
 */
class ToolsInterestActionInterestKeyword extends RpcRequest
{
    protected string $url = '/2/tools/interest_action/interest/keyword/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
