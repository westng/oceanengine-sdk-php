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
 * Name 获取推荐使用的视频素材.
 *
 * 本接口暂仅支持白名单客户使用，如有诉求可联系对接销售/运营
 * Class RecommendVideoList.
 */
class RecommendVideoList extends RpcRequest
{
    protected string $url = '/v3.0/recommend/video/list/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
