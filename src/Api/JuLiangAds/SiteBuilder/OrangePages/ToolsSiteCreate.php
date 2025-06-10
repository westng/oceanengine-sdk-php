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
 * 创建橙子建站站点.
 *
 * 通过此接口，用户可以创建站点（用于存放落地页），之后才能创建落地页。
 * 创建站点接口会返回"code_0"，代表站点创建成功。
 */
class ToolsSiteCreate extends RpcRequest
{
    protected string $url = '/2/tools/site/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
