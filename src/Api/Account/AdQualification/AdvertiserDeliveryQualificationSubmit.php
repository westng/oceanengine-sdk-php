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

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 上传/更新投放资质（新版）
 * 使用必看
 * 该接口用于广告主投放资质上传，请注意以下使用规则：
 * 需要将资质上传至对应的同名资质类型中，资质类型选择错误将会被审核拒绝。若找不到对应的资质类型，可以上传至“其他资质”，详细的资质类型可选值见下方接口入参。
 * 需要上传多份资质时，例如要上传三份肖像授权书，请将每一份肖像授权书分开上传，多份资质合并上传将会被审核拒绝。
 * 对于一份完整资质的多张图片请上传至一个资质id中，例如一份经销授权书的3张图片内容
 * 错误方式：分3次调用接口，会导致资质接收不全而被拒绝
 * 正确方式：将一份完整的资质调一次接口上传至一个资质中，保证审核平台能够一次收到完整的资质内容
 * Class AdvertiserDeliveryQualificationSubmit.
 */
class AdvertiserDeliveryQualificationSubmit extends RpcRequest
{
    protected string $url = '/v3.0/advertiser/delivery_qualification/submit/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;

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

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
