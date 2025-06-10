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
 * Name 获取推广产品资质规则配置
 * 根据商业化行业获取不同行业下对应的资质提交规则。需注意：每个行业下的资质提交规则可能会因平台及外部监管的要求而发生变化，当规则发生变更时，规则的版本号+1
 * 逻辑说明：
 * 业务逻辑总体介绍：根据投放内容所在的不同行业需要一组完整的、相关联的资质才可以形成证明效力。调用API之前，您需要首先查询本接口获取所选行业推广产品资质的配置规则（拿到config_id)
 * 每个行业的配置规则由2个模块组成：必填资质模块necessaries、选填资质模块unnecessaries构成，至少传其中一个模块
 * 每一个行业同一时刻只会对应一组config_id，里面的各项id均不会变化。但如果平台针对该行业的资质收取规则发生变化，则其中的config_id会发生变化，可以根据config_id判断规则是否发生变化
 * 由于config_id可能发生变化，且变化时间并不固定，建议您每7-14天定期通过本接口查询config_id是否发生变化，如变化请存储最新的配置规则。
 * Class AdvertiserDeliveryPkgConfig.
 */
class AdvertiserDeliveryPkgConfig extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_pkg_config/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
