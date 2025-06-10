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
 * Name 广告主添加抖音号
 * 支持抖音号授权，即将抖音号授权给广告主做广告投放
 * 线下联系合作达人
 * 获取达人合作码
 * 添加可授权抖音号
 * 注意：如果广告主未在千川PC添加过抖音号，需要先在PC完成过一次添加抖音号操作（签署《巨量千川商业合作授权协议》），否则调用接口会报错。
 * Class QianChuanToolsAwemeAuth.
 */
class QianChuanToolsAwemeAuth extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/tools/aweme_auth/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
