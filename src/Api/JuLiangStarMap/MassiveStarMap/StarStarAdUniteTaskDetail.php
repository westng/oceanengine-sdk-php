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
 * Name 获取星广联投(星图版)任务维度数据
 * Class StarStarAdUniteTaskDetail.
 */
class StarStarAdUniteTaskDetail extends RpcRequest
{
    protected string $url = '/2/star/star_ad_unite_task/detail/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
