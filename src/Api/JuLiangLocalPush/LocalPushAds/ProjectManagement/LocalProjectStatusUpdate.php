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
 * Name 批量更新项目状态
 * Class LocalProjectStatusUpdate.
 */
class LocalProjectStatusUpdate extends RpcRequest
{
    protected string $url = '/v3.0/local/project/status/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
