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

namespace Api\JuLiangAds\QingniaoLeads\WeChatComponent;

use Core\Profile\RpcRequest;

/**
 * 获取微信号码包详情.
 *
 * 获取指定微信号码包详情
 */
class ClueWechatInstanceDetail extends RpcRequest
{
    protected string $url = '/2/clue/wechat_instance/detail/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
