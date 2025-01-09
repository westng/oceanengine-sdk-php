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

namespace Api\JuLiangAds\FundsMgmt;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

/**
 * Name 转账-查询转账单信息（代理）
 * Class CgTransferQueryTransferDetail
 */
class CgTransferQueryTransferDetail extends RpcRequest
{
    protected string $url = '/v3.0/cg_transfer/query_transfer_detail/';

    protected string $method = 'GET';

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

    public function check()
    {
    }
}
