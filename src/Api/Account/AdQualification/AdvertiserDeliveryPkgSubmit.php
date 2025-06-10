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

namespace Api\Account\AdQualification;

use Core\Profile\RpcRequest;

/**
 * Name 上传/更新推广产品资质
 * 用于提交以推广产品形式整组提交的投放资质，该接口可以同时用于新增和编辑（针对审核不通过的推广产品资质支持编辑提交）
 * 逻辑说明
 * 业务逻辑总体介绍：根据投放内容所在的不同行业需要一组完整的、相关联的资质才可以形成证明效力。调用API之前，您需要首先查询【推广产品资质规则配置查询】接口获取所选行业推广产品资质的配置规则（拿到config_id)
 * 每个行业的配置规则由2个模块组成：必填资质模块necessary_combines、选填资质模块unnecessary_combines构成，接口需至少传其中一个
 * 每一个行业同一时刻只会对应一组config_id，里面的各项id均不会变化。但如果平台针对该行业的资质收取规则发生变化，则其中的config_id会发生变化，可以根据config_id判断规则是否发生变化
 * 由于config_id可能发生变化，且变化时间并不固定，建议您每7-14天定期通过【获取推广产品资质规则配置】接口查询config_id是否发生变化，如变化请存储最新的配置规则。
 * Class AdvertiserDeliveryPkgSubmit.
 */
class AdvertiserDeliveryPkgSubmit extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_pkg/submit/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
