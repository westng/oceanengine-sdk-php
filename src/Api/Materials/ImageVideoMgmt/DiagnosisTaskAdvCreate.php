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
 * Name Adv创建前测任务.
 *
 * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
 *
 * 使用限制：
 * 同一广告主 1000素材/24H
 * Class DiagnosisTaskAdvCreate.
 */
class DiagnosisTaskAdvCreate extends RpcRequest
{
    protected string $url = '/2/diagnosis_task/adv/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
