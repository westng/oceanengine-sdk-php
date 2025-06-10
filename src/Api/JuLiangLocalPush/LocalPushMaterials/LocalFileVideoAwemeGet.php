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

namespace Api\JuLiangLocalPush\LocalPushMaterials;

use Core\Profile\RpcRequest;

/**
 * Name 获取抖音主页视频
 * 该接口目前仅支持标准推广，且推广目的为团购成交/门店引流/内容加热的创编视频获取，暂不支持标准推广中的获取线索链路及全域推广
 * Class LocalFileVideoAwemeGet.
 */
class LocalFileVideoAwemeGet extends RpcRequest
{
    protected string $url = '/v3.0/local/file/video/aweme/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
