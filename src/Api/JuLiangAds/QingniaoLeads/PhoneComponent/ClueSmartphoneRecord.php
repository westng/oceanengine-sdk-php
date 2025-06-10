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

namespace Api\JuLiangAds\QingniaoLeads\PhoneComponent;

use Core\Profile\RpcRequest;

/**
 * 查询智能电话拨打记录.
 *
 * 查询智能电话拨打记录接口
 */
class ClueSmartphoneRecord extends RpcRequest
{
    protected string $url = '/2/clue/smartphone/record/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
