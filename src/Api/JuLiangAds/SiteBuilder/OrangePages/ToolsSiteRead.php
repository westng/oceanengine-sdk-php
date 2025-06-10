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

namespace Api\JuLiangAds\SiteBuilder\OrangePages;

use Core\Profile\RpcRequest;

/**
 * 获取橙子建站站点详细信息.
 *
 * 通过此接口，用户可以获取站点的详细信息，包括新建或更新时传递的全量数据。
 */
class ToolsSiteRead extends RpcRequest
{
    protected string $url = '/2/tools/site/read/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
