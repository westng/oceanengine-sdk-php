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

namespace Api\Tools\InteractiveAds;

use Core\Profile\RpcRequest;

/**
 * Name 获取互动作品信息.
 *
 * 查询广告主名下的互动广告作品列表与作品信息
 * Class ToolsRubeexGet.
 */
class ToolsRubeexGet extends RpcRequest
{
    protected string $url = '/2/tools/rubeex/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
