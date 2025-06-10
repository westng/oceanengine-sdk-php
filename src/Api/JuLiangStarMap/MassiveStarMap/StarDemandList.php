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

namespace Api\JuLiangStarMap\MassiveStarMap;

use Core\Profile\RpcRequest;

/**
 * Name 获取星图客户任务列表
 * Class StarDemandList.
 */
class StarDemandList extends RpcRequest
{
    protected string $url = '/2/star/demand/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
