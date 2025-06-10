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
 * 数据源创建.
 *
 * 通过【数据源文件上传】接口得到file_path文件路径后，调用当前接口将数据源文件创建成一个数据源，创建成功后会返回一个数据源id，作为数据源的唯一标识。
 */
class DmpDataSourceCreateGet extends RpcRequest
{
    protected string $url = '/2/dmp/data_source/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
