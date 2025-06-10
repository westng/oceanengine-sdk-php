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

namespace Api\JuLiangAds\DmpAudience;

use Core\Profile\RpcRequest;

/**
 * 数据源文件上传.
 *
 * 当用户需要上传本地数据到DMP数据平台上时，需要处理成符合数据格式要求的文件，使用数据源文件上传功能。
 */
class DmpDataSourceFileUploadGet extends RpcRequest
{
    protected string $url = '/2/dmp/data_source/file/upload/';

    protected string $method = 'POST';

    protected string $content_type = 'multipart/form-data';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
