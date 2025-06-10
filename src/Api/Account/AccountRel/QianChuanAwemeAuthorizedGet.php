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
 * Name 获取千川账户下可投广抖音号
 * 获取千川账户下可投广抖音号，对齐千川PC创编链路的抖音号选择列表
 * 注意：使用抖音号用来创建广告投放时，在原有的“抖音号带货状态”校验下会新增如下校验
 * 1、对于短视频投放，会额外校验抖音号是否具有“短视频带货权限”
 * 2、对于直播投放，会额外校验抖音号是否具有“直播带货权限”以及“抖音号是否有全域推广计划投放”
 * Class QianChuanAwemeAuthorizedGet.
 */
class QianChuanAwemeAuthorizedGet extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/aweme/authorized/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
