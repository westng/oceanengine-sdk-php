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
 * 更新微信号码包.
 *
 * 更新微信号码包接口
 */
class ClueWechatInstanceUpdate extends RpcRequest
{
    protected string $url = '/2/clue/wechat_instance/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
