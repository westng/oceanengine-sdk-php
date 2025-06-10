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

namespace Api\JuLiangAds\Assets\Events;

use Core\Profile\RpcRequest;

/**
 * 获取账户下资产列表（新）.
 *
 * 本接口为巨量引擎开放平台2024年6月5日新增接口，接口能力覆盖旧接口「获取已创建资产列表」，且新增支持以下能力：
 * 支持获取橙子落地页TETRIS_EXTERNAL、应用APP资产类型信息
 * 可通过资产ID、资产类型以及资产修改时间筛选查询广告主拥有的资产信息
 * 若需获取各资产详情信息，可与「获取已创建资产详情」接口配合调用
 * 「获取已创建资产列表」接口即将于8月6日下线，可切换至本接口获取资产信息
 * 应答参数返回的资产范围如下：
 * 包含账户下创建的资产以及被共享的资产，返回结果与巨量广告平台事件资产信息一致
 * 账户下不返回已删除的资产
 */
class ToolsEventAllAssetsList extends RpcRequest
{
    protected string $url = '/2/tools/event/all_assets/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告账户id.
     */
    protected int $advertiser_id;
}
