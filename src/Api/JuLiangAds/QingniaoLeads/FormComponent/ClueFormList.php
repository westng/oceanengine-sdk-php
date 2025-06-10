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

namespace Api\JuLiangAds\QingniaoLeads\FormComponent;

use Core\Profile\RpcRequest;

/**
 * 获取表单列表.
 *
 * 本接口用于获取青鸟线索通表单列表，可根据时间和表单实例id等条件进行过滤，本接口仅获取表单等基本信息，
 * 需要详细信息需调用【获取表单详情】接口。
 */
class ClueFormList extends RpcRequest
{
    protected string $url = '/2/clue/form/list/';

    protected string $method = 'GET';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
