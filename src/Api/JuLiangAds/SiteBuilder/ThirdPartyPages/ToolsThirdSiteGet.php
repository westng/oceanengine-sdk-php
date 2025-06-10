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
 * 获取第三方落地页站点列表.
 *
 * 通过此接口，广告主可以获取广告主下拥有的第三方落地页站点列表。
 * 列表信息包含站点审核状态、站点创建时间、站点名称、站点ID、缩略图地址、站点地址。
 */
class ToolsThirdSiteGet extends RpcRequest
{
    protected string $url = '/2/tools/third_site/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
