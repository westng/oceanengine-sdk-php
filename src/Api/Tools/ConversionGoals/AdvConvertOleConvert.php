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

namespace Api\Tools\ConversionGoals;

use Core\Profile\RpcRequest;

/**
 * Name 引流下单转化信息获取
 * Class AdvConvertOleConvert.
 */
class AdvConvertOleConvert extends RpcRequest
{
    protected string $url = '/2/adv_convert/ole/convert/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
