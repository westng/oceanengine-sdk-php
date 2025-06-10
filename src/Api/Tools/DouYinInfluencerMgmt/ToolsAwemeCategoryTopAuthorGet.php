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
 * Name 查询抖音类目下的推荐达人
 * Class ToolsAwemeCategoryTopAuthorGet.
 */
class ToolsAwemeCategoryTopAuthorGet extends RpcRequest
{
    protected string $url = '/2/tools/aweme_category_top_author/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
