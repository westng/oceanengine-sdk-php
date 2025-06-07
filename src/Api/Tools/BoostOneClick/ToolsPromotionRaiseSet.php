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

namespace Api\Tools\BoostOneClick;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 开启/更新一键起量.
 *
 * 一键起量使用条件：
 * - oCPM计划
 * - 非nobid&自动化计划（管家，省心投）
 * - 仅状态为"投放中"的广告支持"立即生效"
 *
 * 每个起量方案生效时间为6小时，冲突会报错。
 * 全量更新。传空则更新为空，此时已预约的方案将被删除，生效中的方案不受影响。
 */
class ToolsPromotionRaiseSet extends RpcRequest
{
    protected string $url = '/v3.0/tools/promotion_raise/set/';

    protected string $method = 'POST';

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
