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
 * Name 批量删除图文.
 *
 * 通过此接口，用户可以对图文素材进行批量删除。
 *
 * 特别注意：
 * 1. 当素材删除失败时，会展示在carousel_id列表
 * 2. 不在此列表内的素材表示删除成功
 * Class CarouselDelete.
 */
class CarouselDelete extends RpcRequest
{
    protected string $url = '/2/carousel/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
