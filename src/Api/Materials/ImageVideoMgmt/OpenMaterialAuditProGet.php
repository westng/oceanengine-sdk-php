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
 * Name 广告素材预审结果查询（连山云视频点播版）.
 *
 * 连山云视频点播版广告素材预审接口对应的审核结果内容查询接口
 * Class OpenMaterialAuditProGet.
 */
class OpenMaterialAuditProGet extends RpcRequest
{
    protected string $url = '/v3.0/open_material_audit/pro/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
