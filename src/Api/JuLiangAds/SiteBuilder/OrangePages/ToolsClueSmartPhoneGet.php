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
 * 建站工具——查询已有智能电话.
 *
 * 通过此接口，用户可以获取已有智能电话实例列表，可用于建站。
 * 列表栏包括智能电话实例ID、实例名称、是否为真实可接通的电话、电话id、电话号码、创建时间等信息。
 */
class ToolsClueSmartPhoneGet extends RpcRequest
{
    protected string $url = '/2/tools/clue/smart_phone/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
