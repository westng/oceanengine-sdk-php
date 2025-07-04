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

namespace Api\JuLiangLocalPush\LocalPushAds\ProjectManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取项目列表
 * 注意：该接口暂不支持拉取推广目的为获取线索的项目
 * Class LocalProjectList.
 */
class LocalProjectList extends RpcRequest
{
    protected string $url = '/v3.0/local/project/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
