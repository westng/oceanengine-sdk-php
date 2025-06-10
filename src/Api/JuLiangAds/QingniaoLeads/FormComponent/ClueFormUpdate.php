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
 * 更新表单.
 *
 * 本接口用于表单的更新修改，主要可更新如下：
 *
 * 1. 基础信息模块
 *    包含表单名称，不会在C端体现出来
 *
 * 2. 分层表单
 *    分层内部的元素同样对应elements
 *    结合字段：enable_layer + layer_submit_text
 *
 * 3. 高级设置
 *    高级设置属于扩展功能，目前主要包含三项内容：
 *    - 计数设置
 *      包含递增和递减两种类型
 *      基于计数前文案+计数值+计数后文案拼接完整方案
 *    - 展示报名用户：
 *      包含滚动墙和滚动条两种类型
 *      基于已提交用户信息展示数据
 *    - 提交成功提示语：
 *      商家端额外通知用户的信息，如"24h内联系您"
 *
 * 支持增量更新，目前不支持elements模块的修改。
 */
class ClueFormUpdate extends RpcRequest
{
    protected string $url = '/2/clue/form/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
