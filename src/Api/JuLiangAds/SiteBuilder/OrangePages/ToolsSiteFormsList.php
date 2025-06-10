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
 * 获取落地页预约表单信息.
 *
 * 通过此接口，用户可以获取橙子建站落地页中的特殊的表单类型，比如附带下载类型。
 * 预约表单信息包括落地页表单ID、落地页表单位置、落地页表单名字等信息。
 */
class ToolsSiteFormsList extends RpcRequest
{
    protected string $url = '/2/tools/site/forms/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
