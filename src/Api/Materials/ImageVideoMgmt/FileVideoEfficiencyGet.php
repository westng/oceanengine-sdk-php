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
 * Name 获取低效素材.
 *
 * 支持查询素材是否是低效素材，传入素材ID列表，返回低效素材列表。
 *
 * 什么是低效素材？
 * 1. 在一定历史投放周期内，素材累积消耗低于系统标准，即定义为低效素材
 * 2. 目前低效素材仅针对视频素材进行识别
 *
 * 低效素材的影响：
 * 1. 根据整体数据分析，无论是复用低效素材新建计划或将低效素材稍加修改后重新使用，低效素材起量的可能性较小，进而影响计划的跑量能力
 * 2. 如计划下出现大量低效素材，则该计划预计跑量困难，占用在投计划配额、投放人力和投放预算，建议更换素材
 * 3. 如果新建创意下素材全部为低效素材，那么创意将无法创建成功，建议更换其他素材
 * Class FileVideoEfficiencyGet.
 */
class FileVideoEfficiencyGet extends RpcRequest
{
    protected string $url = '/2/file/video/efficiency/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
