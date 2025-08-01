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
 * Name 获取广告预览二维码（升级版）.
 *
 * 新建广告审核通过后支持生成获取预览二维码，项目/广告暂停不支持获取预览二维码
 * 注意：通过本接口获取到的预览url，需要自行转换为二维码，使用巨量引擎app或抖音app扫码预览
 * Class ToolsAdPreviewQrcodeGet.
 */
class ToolsAdPreviewQrcodeGet extends RpcRequest
{
    protected string $url = '/v3.0/tools/ad_preview/qrcode_get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
