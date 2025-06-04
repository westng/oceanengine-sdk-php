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

namespace Api\JuLiangAds\AssetManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 获取同主体下广告主图片素材.
 *
 * 通过此接口，用户可以查询获取同主体下的广告主图片素材信息。
 *
 * 接口权限：
 * 查看图片的信息，获取图片md5、宽高、预览地址等内容，合理利用还可以搭建自己的素材库进行素材的管理。
 *
 * 成功调用本接口需同时满足以下条件：
 * 1. 请求参数中传入的广告主账户advertiser_id和image_id存在绑定关系，即广告账户的素材库中存在这些image_id，否则报错：「无权限操作内容」
 * 2. 仅当开发者账户主体与所传入的广告主账户主体一致时，可通过本接口查询图片的预览地址url
 * 3. 如果您的开发者账号未完成企业认证，或完成企业认证但客户在授权广告账户时未勾选「敏感物料授权」，您将无法获取图片的预览地址url
 */
class FileImageAdGet extends RpcRequest
{
    protected string $url = '/2/file/image/ad/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
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
