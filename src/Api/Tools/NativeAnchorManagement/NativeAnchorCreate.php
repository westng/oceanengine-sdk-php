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
 * Name 创建原生锚点.
 *
 * 该接口暂不支持创建「高级在线预约」、「外跳」、「字节小程序」锚点。
 * 近期更新：
 * 2023/12/27，请求参数中product_price类型调整为double，允许2位小数，原按整数型传入不受影响。
 * Class NativeAnchorCreate.
 */
class NativeAnchorCreate extends RpcRequest
{
    protected string $url = '/v3.0/native_anchor/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
