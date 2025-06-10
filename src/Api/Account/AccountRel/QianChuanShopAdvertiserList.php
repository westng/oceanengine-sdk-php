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

namespace Api\Account\AccountRel;

use Core\Profile\RpcRequest;

/**
 * Name 获取店铺账户关联的广告账户列表
 * 千川的广告账户无法通过接口直接获取，需要先通过【获取已授权的账户】获取客户授权时的店铺id/代理商id，再通过本接口或【获取代理商账户关联的广告账户列】获取广告账户列表
 * 若需要知道返回的千川广告主账户是直投账户还是代理账户，请使用【获取千川广告账户全量信息】，通过返回账户的role进行判断
 * Class QianChuanShopAdvertiserList.
 */
class QianChuanShopAdvertiserList extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/shop/advertiser/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';
}
