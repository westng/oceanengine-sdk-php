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
 * 建站工具——查询已有表单列表.
 *
 * 通过此接口，用户可以根据广告主ID获取广告主已有表单列表，可用于建站。
 * 列表栏包括广告主ID、实例ID、实例名称、版本信息、是否已删除、是否未分层表单、
 * 表单类型、表单内是否包含电话元素、创建时间等信息。
 */
class ToolsClueFormGet extends RpcRequest
{
    protected string $url = '/2/tools/clue/form/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
