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

namespace Api\Tools\DouYinInfluencerMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 查询授权直播抖音达人列表
 * Class ToolsLiveAuthorizeList.
 */
class ToolsLiveAuthorizeList extends RpcRequest
{
    protected string $url = '/2/tools/live_authorize/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
