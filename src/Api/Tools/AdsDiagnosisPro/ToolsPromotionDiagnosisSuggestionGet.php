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
 * Name 获取广告诊断建议.
 *
 * 该接口查询的广告诊断建议为最新结果，与巨量广告平台同步
 * 应答参数中的诊断有效期仅做参考，实际诊断结果实时变化，建议直接调用接口查询最新诊断建议
 * Class ToolsPromotionDiagnosisSuggestionGet.
 */
class ToolsPromotionDiagnosisSuggestionGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_diagnosis/suggestion/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
