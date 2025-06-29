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

namespace Api\Materials\ImageVideoMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 代理商获取视频素材.
 *
 * 代理商获取视频素材
 * Class FileVideoAgentGet.
 */
class FileVideoAgentGet extends RpcRequest
{
    protected string $url = '/2/file/video/agent/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
