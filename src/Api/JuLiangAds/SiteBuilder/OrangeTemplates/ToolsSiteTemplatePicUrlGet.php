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

namespace Api\JuLiangAds\SiteBuilder\OrangeTemplates;

use Core\Profile\RpcRequest;

/**
 * 获取模板/站点URL.
 *
 * 通过 site_id / template_id 获取站点/模板下的图片加签URL。
 */
class ToolsSiteTemplatePicUrlGet extends RpcRequest
{
    protected string $url = '/2/tools/site_template/pic_url/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
