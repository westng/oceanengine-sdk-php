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
 * 获取第三方落地页预览地址.
 *
 * 通过此接口，用户可以获取第三方落地页预览地址。
 */
class ToolsThirdSitePreview extends RpcRequest
{
    protected string $url = '/2/tools/third_site/preview/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
