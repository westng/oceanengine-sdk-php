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

namespace Api\Tools\TargetingPackages;

use Core\Profile\RpcRequest;

/**
 * Name 创建定向包.
 *
 * 不同类型定向包可应用于不同类型的计划。
 * 该接口同时支持巨量广告和巨量广告升级版：
 * - AD：广告计划（若定向包被应用于巨量广告升级版，此处含义为广告 promotion）
 * - CAMPAIGN：广告组（若定向包被应用于巨量广告升级版，此处含义为项目project）
 *
 * 定向包类型说明：
 * - 落地页：可用于推广目的为销售线索收集或推广目的为应用推广且下载方式为落地页的计划
 * - 应用推广（Android）：可用于推广目的为应用推广且下载方式为Android下载链接的计划
 * - 应用推广（iOS）：可用于推广目的为应用推广且下载方式为iOS下载链接的计划
 * - 其余类型：可应用于推广目的为该类型名称的计划
 *
 * 注意：每一个广告主下最多只能创建200个定向包。
 * Class AudiencePackageCreate.
 */
class AudiencePackageCreate extends RpcRequest
{
    protected string $url = '/2/audience_package/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
