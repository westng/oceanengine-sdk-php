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
 * Name 删除定向包.
 *
 * 删除广告主下的定向包。
 * Class AudiencePackageDelete.
 */
class AudiencePackageDelete extends RpcRequest
{
    protected string $url = '/2/audience_package/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
