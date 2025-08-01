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

namespace Api\Tools\CommentMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 置顶/取消置顶评论
 * Class ToolsCommentStickOnTop.
 */
class ToolsCommentStickOnTop extends RpcRequest
{
    protected string $url = '/v3.0/tools/comment/stick_on_top/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
