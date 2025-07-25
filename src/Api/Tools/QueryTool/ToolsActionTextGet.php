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
 * Name 行动号召字段内容获取.
 *
 * 获取行动号召字段内容，注意：结合附加创意类型以及广告主行业参数可以查询出更多细纬度的行动号召内容
 * Class ToolsActionTextGet.
 */
class ToolsActionTextGet extends RpcRequest
{
    protected string $url = '/2/tools/action_text/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
