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

namespace Api\JuLiangAds\SiteBuilder\OrangePages;

use Core\Profile\RpcRequest;

/**
 * 获取橙子建站站点列表.
 *
 * 通过此接口，用户可以获取广告主建站列表。
 * 列表栏包括建站ID、建站名称、建站状态、建站类型、建站类别、站点缩略图等信息。
 *
 * 该接口当前还不会返回建站地址，建站地址可由如下格式拼装得到：
 * https://www.chengzijianzhan.com/tetris/page/XXXXXXXXXXXXX/
 * （其中XX是建站ID，拼装后就可获得投放的URL/预览URL）
 */
class ToolsSiteGet extends RpcRequest
{
    protected string $url = '/2/tools/site/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
