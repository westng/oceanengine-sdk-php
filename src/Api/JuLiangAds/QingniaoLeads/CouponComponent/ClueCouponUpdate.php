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

namespace Api\JuLiangAds\QingniaoLeads\CouponComponent;

use Core\Profile\RpcRequest;

/**
 * 编辑卡券.
 *
 * 编辑卡券接口。只有deliver_start、deliver_end、global_limit、user_limit允许编辑。
 * 卡券开始后，所有的数据都不允许修改。
 * status字段控制卡券的上下线，只支持：NORMAL：上线，OFFLINE：下线
 */
class ClueCouponUpdate extends RpcRequest
{
    protected string $url = '/2/clue/coupon/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
