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
 * Name 更新图文信息.
 *
 * 更新图文信息，目前仅支持图文标题 file_name 和图片主题修改
 * CLass CarouselUpdate.
 */
class CarouselUpdate extends RpcRequest
{
    protected string $url = '/2/carousel/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
