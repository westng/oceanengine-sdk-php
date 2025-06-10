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
 * Name 批量获取项目成本保障状态
 * Class ProjectCostProtectStatusGet.
 */
class ProjectCostProtectStatusGet extends RpcRequest
{
    protected string $url = '/v3.0/project/cost_protect_status/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 巨量广告平台广告主id.
     */
    protected int $advertiser_id;
}
