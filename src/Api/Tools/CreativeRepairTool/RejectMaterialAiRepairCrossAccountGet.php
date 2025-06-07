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

namespace Api\Tools\CreativeRepairTool;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 根据mid查询同主体账户下修复建议列表.
 *
 * 注意：本接口仅支持根据advertiser_id、拒审material_id，查询该拒审素材已被应用到哪些同主体账户下&已产生修复建议，注意：
 * 如传入的advertiser_id下不存在material_id、material_id未产生修复建议，接口不会查询到数据
 * 该接口仅返回与传入advertiser_id同主体的账户
 * 通过应答参数获取到的related_advertiser_id、related_ai_repair_ids，可直接应用到采纳接口
 */
class RejectMaterialAiRepairCrossAccountGet extends RpcRequest
{
    protected string $url = '/v3.0/reject_material/ai_repair/cross_account/get/';

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
