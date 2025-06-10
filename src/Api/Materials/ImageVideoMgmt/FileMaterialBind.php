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

namespace Api\Materials\ImageVideoMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 素材推送.
 *
 * 本接口支持推送广告账户下已有的视频素材。
 *
 * 特别注意：
 * 1. 不支持推送组织共享的视频素材
 * 2. 当素材在被推送账户下已存在，素材文件名、来源不会变化，仅更新素材的上传时间
 * 3. 一次请求推送限制需满足：推送视频数＜=50、推送账户数*推送视频数＜=1000
 * Class FileMaterialBind.
 */
class FileMaterialBind extends RpcRequest
{
    protected string $url = '/2/file/material/bind/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 素材归属广告主.
     */
    protected int $advertiser_id;
}
