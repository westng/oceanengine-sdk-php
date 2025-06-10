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

namespace Api\Tools\ByteMiniAppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 获取字节小游戏.
 *
 * 获取字节小游戏列表，对应在巨量工作台上的字节小游戏资产。
 * Class ToolsMicroGameList.
 */
class ToolsMicroGameList extends RpcRequest
{
    protected string $url = '/v3.0/tools/micro_game/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
