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
 * Name 获取千川账户下抖音号授权列表
 * 获取千川账户下抖音号授权列表，对齐千川PC抖音号授权管理模块
 * Class QianChuanAwemeAuthListGet.
 */
class QianChuanAwemeAuthListGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme_auth_list/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
