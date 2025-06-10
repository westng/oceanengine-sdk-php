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
 * Name 更新定向包.
 *
 * 更新广告主下的定向包信息。
 * Class AudiencePackageUpdate.
 */
class AudiencePackageUpdate extends RpcRequest
{
    protected string $url = '/2/audience_package/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
