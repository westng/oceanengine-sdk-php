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
 * Name 更新动态创意词包.
 *
 * 针对已创建的动态创意词包进行修改，可修改词包名称、默认词、替换词三部分。
 * Class ToolsCreativeWordUpdate.
 */
class ToolsCreativeWordUpdate extends RpcRequest
{
    protected string $url = '/2/tools/creative_word/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
