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

namespace Api\JuLiangAds\DmpAudience;

use Core\Profile\RpcRequest;

/**
 * 数据源更新.
 *
 * 用户可以调用该接口在原有的数据源上进行添加、删除、重置操作。数据源更新不会导致数据源id发生变化。
 */
class DmpDataSourceUpdateGet extends RpcRequest
{
    protected string $url = '/2/dmp/data_source/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
