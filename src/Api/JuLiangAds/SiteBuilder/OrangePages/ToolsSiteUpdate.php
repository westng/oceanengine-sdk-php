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

namespace Api\JuLiangAds\SiteBuilder\OrangePages;

use Core\Profile\RpcRequest;

/**
 * 修改橙子建站站点.
 *
 * 通过此接口，用户可以修改站点的基本信息。
 * 目前bricks不支持部分更新，仅支持全量更新，更新bricks时，需要传递完整bricks信息，
 * 除需要更新的bricks信息以外，其余bricks中的信息需要和创建时保持不变。
 * 修改成功时，无业务参数返回！
 */
class ToolsSiteUpdate extends RpcRequest
{
    protected string $url = '/2/tools/site/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
