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

namespace Api\JuLiangLocalPush\LocalPushLeads;

use Core\Profile\RpcRequest;

/**
 * Name 获取本地推线索列表
 * Class ToolsClueLifeGet.
 */
class ToolsClueLifeGet extends RpcRequest
{
    protected string $url = '/2/tools/clue/life/get/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
