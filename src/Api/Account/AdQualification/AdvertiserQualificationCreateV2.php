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
 * Name 上传投放资质（旧版）
 * 通过此接口，用户可以批量上传投放资质。
 * 【注意】本接口不再维护，请使用【上传/更新投放资质（新版）】接口
 * 此接口上传的是广告投放资质，如需账户主体资质请调用【上传主体资质（新版）】接口
 * 该接口不支持返回投放资质部分成功部分失败的报错信息，所以失败后需要重新全量上传后再进行审核
 * Class AdvertiserQualificationCreateV2.
 */
class AdvertiserQualificationCreateV2 extends RpcRequest
{
    protected string $url = '/2/advertiser/qualification/create_v2/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
