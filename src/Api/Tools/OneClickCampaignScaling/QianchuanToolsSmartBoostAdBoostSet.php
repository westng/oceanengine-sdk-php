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

namespace Api\Tools\OneClickCampaignScaling;

use Core\Profile\RpcRequest;

/**
 * Name 设置计划一键起量任务
 * Class QianchuanToolsSmartBoostAdBoostSet.
 */
class QianchuanToolsSmartBoostAdBoostSet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/tools/smart_boost/ad_boost/set/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
