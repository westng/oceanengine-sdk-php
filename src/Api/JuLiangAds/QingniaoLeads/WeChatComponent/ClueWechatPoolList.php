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
 * 获取微信库微信号列表.
 *
 * 获取微信库微信号列表接口
 */
class ClueWechatPoolList extends RpcRequest
{
    protected string $url = '/2/clue/wechat_pool/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
