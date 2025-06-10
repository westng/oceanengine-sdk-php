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

namespace Api\JuLiangAds\AdsPro\ProjectManagement;

use Core\Profile\RpcRequest;

/**
 * Name 更新项目
 * Class ProjectUpdate.
 */
class ProjectUpdate extends RpcRequest
{
    protected string $url = '/v3.0/project/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
