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

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 更改橙子建站站点状态.
 *
 * 通过此接口，用户可以更改橙子建站站点状态。
 * 更改橙子建站站点状态前，可在获取橙子建站站点详细信息的返回参数中获取当前站点状态status。
 * 站点状态的枚举值详见【站点状态】，状态不同，可对应的操作会做相应限制。
 * 如DELETED 和AUDIT_BANNED状态下不可再上线；EDIT状态下不可直接使用。
 *
 * 新建的站点同样需要发布后才可生效投入使用！
 * 恢复删除站点后，需要再发布才可生效！
 */
class ToolsSiteUpdateStatus extends RpcRequest
{
    protected string $url = '/2/tools/site/update_status/';

    protected string $method = 'POST';

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
