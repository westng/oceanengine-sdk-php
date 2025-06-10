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
 * 删除表单.
 *
 * 本接口可进行表单的删除，删除后获取表单列表时默认不获取，但是仍能通过表单实例id获取表单详情，is_del状态变为1。
 *
 * 注：对于当日产生了线索数据的表单不支持删除，会报错：message：has clues today
 */
class ClueFormDelete extends RpcRequest
{
    protected string $url = '/2/clue/form/delete/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
