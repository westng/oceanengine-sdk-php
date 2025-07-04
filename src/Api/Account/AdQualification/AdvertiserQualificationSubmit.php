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
 * Name 上传主体资质（新版）
 * 提交广告主的主体资质信息为全量接口。更新的时候需要全量先获取所有的主体资质，然后更新相应主体资质。
 * Class AdvertiserQualificationSubmit.
 */
class AdvertiserQualificationSubmit extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/qualification/submit/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
