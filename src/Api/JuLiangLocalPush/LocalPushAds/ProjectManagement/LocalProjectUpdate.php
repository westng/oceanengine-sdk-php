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

namespace Api\JuLiangLocalPush\LocalPushAds\ProjectManagement;

use Core\Profile\RpcRequest;

/**
 * Name 更新项目
 * 接口的更新逻辑为增量更新
 * 定向参数如需设置对应受众为不限：string类型受众设置无限统一传入不限枚举，list类型的受众设置无限统一传入空数组，即[]
 * 对于不打算更新的字段，不要传""或者null，传了会校验
 * Class LocalProjectUpdate.
 */
class LocalProjectUpdate extends RpcRequest
{
    protected string $url = '/v3.0/local/project/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';
}
