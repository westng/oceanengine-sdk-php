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
 * Name 上传视频素材.
 *
 * 通过此接口，用户可以上传和广告相关的素材视频。
 *
 * 建议：
 * 对于连山url链接上传视频，请及时切换至异步上传接口。
 * Class FileVideoAd.
 */
class FileVideoAd extends RpcRequest
{
    protected string $url = '/2/file/video/ad/';

    protected string $method = 'POST';

    protected string $content_type = 'multipart/form-data';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
