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

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 获取线索列表.
 *
 * 该接口用于获取广告主的飞鱼线索列表。
 *
 * 线索列表中，目前暂不包含抖音企业号获取的（广告主ID为空）的线索。
 *
 * 为保证接口使用的安全性避免调取他人的线索信息：
 * 1. 该接口仅允许巨量引擎工作台（组织）账户授权后调用，不支持代理商账户授权。
 * 2. 该接口只可用于查询自己广告主账户下的线索信息，即需查询的广告主账号的主体需与APPID对应开发者的主体保持一致，才可获取到线索的信息，否则会报错！
 * 3. 广告者主体与开发者主体不一致，又要使用该接口时，请在授权时勾选「敏感物料授权」
 *
 * 您要获取的线索信息中包含大量用户个人信息。除您另行获得用户的同意外，您仅可将相关的用户个人信息用于用户授权范围内的必要用途；
 * 涉嫌向他人非法提供、售卖用户个人信息的，可能构成刑事犯罪，须依法承担相应法律责任。
 *
 * 自[2024年12月17日]起，飞鱼将对历史线索的保留时间实施限制，仅保留近2年内的线索数据。超过2年的线索将不再支持接口查询。
 *
 * 其中应答参数是按creative_time倒序返回的。如果您有数据处理的需求，可以参考此排序逻辑。
 */
class ToolsClueGet extends RpcRequest
{
    protected string $url = '/2/tools/clue/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;

    /**
     * @return $this
     */
    public function setArgs(mixed $args): static
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
