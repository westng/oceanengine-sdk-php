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

namespace Api\JuLiangAds\Account\Agency;

use Core\Profile\RpcRequest;

/**
 * Name 更新广告主所属销售
 * Class AgentAdvAdvertiserUpdateSale.
 */
class AgentAdvAdvertiserUpdateSale extends RpcRequest
{
    protected string $url = '/2/agent/adv/advertiser/update_sale/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

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
}
