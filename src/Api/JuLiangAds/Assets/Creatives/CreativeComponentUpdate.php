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

namespace Api\JuLiangAds\Assets\Creatives;

use Core\Profile\RpcRequest;

/**
 * 更新组件.
 *
 * 该接口用户更新创意组件信息。
 * 组件信息发生变更后，提交变更保存成功，会触发组件以及组件关联的所有计划的 重审逻辑、组件状态、以及组件关联的所有计划状态会变为审核中，请重点关注
 */
class CreativeComponentUpdate extends RpcRequest
{
    protected string $url = '/2/assets/creative_component/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
