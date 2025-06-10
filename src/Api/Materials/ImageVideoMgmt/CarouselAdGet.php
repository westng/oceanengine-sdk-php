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
 * Name 获取同主体下广告主图文素材.
 *
 * 通过此接口，用户可以查询同主体下的广告主图文信息。
 *
 * 接口权限：查看图文的信息，获取图文预览地址等内容，合理利用还可以搭建自己的素材库进行素材的管理。
 *
 * 为保证接口使用的安全性避免调取他人的图文信息，该接口只可用于查询自己公司下的图文信息，即需查询的图文ID所属广告主账号的主体需与APPID对应开发者的主体保持一致，才可获取到图文的信息！
 * 如果您的开发者账号还未完成企业认证也将无法调用。请先完成企业认证！
 * Class CarouselAdGet.
 */
class CarouselAdGet extends RpcRequest
{
    protected string $url = '/2/carousel/ad/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
     */
    protected int $advertiser_id;
}
