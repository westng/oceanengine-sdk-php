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

namespace Api\Tools\QueryTool;

use Core\Profile\RpcRequest;

/**
 * Name 查看积分处置详情
 * Class SecurityScoreViolationEventGet.
 */
class SecurityScoreDisposalInfoGet extends RpcRequest
{
    protected string $url = '/v3.0/security/score_disposal_info/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
