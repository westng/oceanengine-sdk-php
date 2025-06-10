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

namespace Api\Materials\ImageVideoMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 获取音频素材（用于图文新建）.
 *
 * 本接口支持查询广告账户下自2024年4月26日起上传的音频素材，不支持查询版权音频相关信息
 *
 * 注意事项：
 * 1. 音频试听url仅限开发者账户与广告主账户同主体时可获取，若非同主体会返回"素材所属主体与开发者主体不一致无法获取URL"
 * 2. 第三方获取敏感物料信息可在授权时申请广告主授权敏感物料权限，可参考常见问题【敏感物料授权】
 * Class FileAudioGet.
 */
class FileAudioGet extends RpcRequest
{
    protected string $url = '/2/file/audio/get/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户ID.
     */
    protected int $advertiser_id;
}
