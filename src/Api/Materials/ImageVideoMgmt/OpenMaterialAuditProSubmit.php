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
 * Name 广告素材预审提交接口（连山云视频点播版）.
 *
 * 支持连山云视频点播的视频进行预审
 * Class OpenMaterialAuditProSubmit.
 */
class OpenMaterialAuditProSubmit extends RpcRequest
{
    protected string $url = '/v3.0/open_material_audit/pro/submit/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
