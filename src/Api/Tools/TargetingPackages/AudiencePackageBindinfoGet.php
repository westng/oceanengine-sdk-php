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

namespace Api\Tools\TargetingPackages;

use Core\Profile\RpcRequest;

/**
 * Name 定向包查询关联项目信息.
 *
 * 可通过【获取定向包】接口获取定向包ID，根据定向包ID查询该定向包关联了哪些项目。
 * Class AudiencePackageBindinfoGet.
 */
class AudiencePackageBindinfoGet extends RpcRequest
{
    protected string $url = '/v3.0/audience_package_bindinfo/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
