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
 * Name 查询推广卡片推荐内容（新版）.
 *
 * 注意：此接口不再维护！即将下线，请勿接入！
 * Class ToolsPromotionCardRecommendTitleGet.
 */
class ToolsPromotionCardRecommendTitleGet extends RpcRequest
{
    protected string $url = '/2/tools/promotion_card/recommend_title/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
