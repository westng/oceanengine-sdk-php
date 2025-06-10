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

namespace Api\DataReports\ProdCompAnalysis;

use Core\Profile\RpcRequest;

/**
 * Name 商品竞争分析详情-效果对比
 * Class QianChuanProductAnalyseCompareStatsData.
 */
class QianChuanProductAnalyseCompareStatsData extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/product/analyse/compare_stats_data/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
