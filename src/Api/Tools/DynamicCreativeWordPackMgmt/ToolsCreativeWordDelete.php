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

namespace Api\Tools\DynamicCreativeWordPackMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 删除动态创意词包.
 *
 * 使用此接口可以删除已创建的动态创意词包。
 * Class ToolsCreativeWordDelete.
 */
class ToolsCreativeWordDelete extends RpcRequest
{
    protected string $url = '/2/tools/creative_word/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
