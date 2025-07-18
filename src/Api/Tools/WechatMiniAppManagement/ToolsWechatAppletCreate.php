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

namespace Api\Tools\WechatMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 创建微信小程序.
 *
 * 创建微信小程序。
 * Class ToolsWechatAppletCreate.
 */
class ToolsWechatAppletCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/wechat_applet/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
