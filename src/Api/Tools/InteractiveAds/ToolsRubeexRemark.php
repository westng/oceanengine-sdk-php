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
 * Name 获取作品场景.
 *
 * 获取作品场景信息
 * Class ToolsRubeexRemark.
 */
class ToolsRubeexRemark extends RpcRequest
{
    protected string $url = '/2/tools/rubeex/remark/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
