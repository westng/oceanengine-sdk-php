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
 * Name 获取图文素材.
 *
 * 通过此接口，用户可以获取经过一定条件过滤后的广告主下创意素材库下图文及图文信息。
 *
 * 注意事项：
 * page*page_size＞10000时会报错，请注意调增请求量级
 * Class CarouselList.
 */
class CarouselList extends RpcRequest
{
    protected string $url = '/2/carousel/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
