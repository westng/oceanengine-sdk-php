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

namespace Api\JuLiangAds\SiteBuilder\ThirdPartyPages;

use Core\Profile\RpcRequest;

/**
 * 修改第三方落地页站点.
 *
 * 通过此接口，用户可以修改第三方落地页站点名称name，修改成功后接口会返回"code_0"。
 * 修改站点名称前后，站点id：site_id不变。
 */
class ToolsThirdSiteUpdate extends RpcRequest
{
    protected string $url = '/2/tools/third_site/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
