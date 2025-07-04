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

namespace Api\Tools\NativeAnchorManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取原生锚点详情.
 *
 * 根据锚点唯一id，获取到锚点详情，支持查询账户下锚点的详情（包括被共享和自有锚点）。
 * 暂不支持获取「高级在线预约」锚点详情。
 * Class NativeAnchorGetDetail.
 */
class NativeAnchorGetDetail extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/get/detail/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户ID.
     */
    protected int $advertiser_id;
}
