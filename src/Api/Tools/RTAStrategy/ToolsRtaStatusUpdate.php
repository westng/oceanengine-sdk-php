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

namespace Api\Tools\RTAStrategy;

use Core\Profile\RpcRequest;

/**
 * Name 批量启停账户下RTA策略.
 *
 * 修改RTA策略状态。
 * Class ToolsRtaStatusUpdate.
 */
class ToolsRtaStatusUpdate extends RpcRequest
{
    protected string $url = '/2/tools/rta/status_update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
