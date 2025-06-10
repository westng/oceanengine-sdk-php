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

namespace Api\JuLiangAds\FeiyuLeads;

use Core\Profile\RpcRequest;

/**
 * 回传有效线索.
 *
 * 为什么要回传线索深转状态？
 * 深转（深度转化），是指在从广告投放到与客户完成交易的过程中，更接近交易事件的客户行为。
 *
 * 巨量引擎需要追踪用户行为来优化广告效果，因此只能优化例如"表单提交"、"多转化"等相对浅度的转化行为。
 * 而对您来说往往客户的深度转化行为更有价值，例如"确认意向"、"到店"甚至"成交"等目标。
 *
 * 当巨量引擎能够追踪客户深转行为时，就能够优化广告投放，花更少的钱找到更倾向发生深转行为的客户。
 *
 * 支持回传事件类型：
 * 当您使用橙子建站落地页投放广告时，巨量引擎会把收集的客户线索存放到飞鱼 CRM 中。
 * 您可以使用此接口为这些线索回传线索深度转化跟进状态（clue_convert_state，目前支持：
 * 194：回访-信息确认、195：回访-加为好友、196：回访-高潜成交、527：顾客到店或销售人员上门、
 * 285：正价品支付、10000：无效线索），使巨量引擎完成对线索的追踪，并优化广告投放效果。
 *
 * 注意事项：
 * 1. 回传广告主的线索信息。为保证接口使用的安全性避免操作他人的线索信息，该接口只可用于操作自己广告主下的线索信息，
 *    即需查询的广告主账号的主体需与APPID对应开发者的主体保持一致，才可操作线索的信息，否则会报错！
 * 2. 通过本接口回传的深度转化事件将在飞鱼CRM-营销-深度转化-上报明细中披露
 */
class ToolsClueCallback extends RpcRequest
{
    protected string $url = '/2/tools/clue/callback/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
