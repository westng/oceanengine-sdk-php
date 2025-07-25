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
 * Name 上传资质图片
 * 通过此接口，用户可以按照一定方式上传符合格式的广告主投放资质、主体资质相关图片，例如营业执照等，接口会返回"code_0"和"message_OK"，代表上传成功
 * 图片格式：jpg、jpeg、png、bmp、gif，大小5M内
 * Class FileImageAdvertiser.
 */
class FileImageAdvertiser extends RpcRequest
{
    protected string $url = '/2/file/image/advertiser/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
