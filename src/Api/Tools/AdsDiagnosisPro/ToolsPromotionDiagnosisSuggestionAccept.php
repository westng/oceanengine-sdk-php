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

namespace Api\Tools\AdsDiagnosisPro;

use Core\Profile\RpcRequest;

/**
 * Name 采纳广告诊断建议.
 *
 * 2.0采纳广告诊断建议
 * Class ToolsPromotionDiagnosisSuggestionAccept.
 */
class ToolsPromotionDiagnosisSuggestionAccept extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_diagnosis/suggestion/accept/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
