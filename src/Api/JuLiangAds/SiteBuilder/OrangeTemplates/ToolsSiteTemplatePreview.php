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
 * 获取模版预览链接.
 *
 * 通过此接口，用户可以预览通过【基于站点创建模板】接口创建的落地页模板。
 *
 * 落地页模板的预览链接有效时间为20分钟。
 */
class ToolsSiteTemplatePreview extends RpcRequest
{
    protected string $url = '/2/tools/site_template/preview/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
