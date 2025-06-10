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

namespace Api\Tools\ByteMiniAppManagement;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 创建字节小程序.
 *
 * 创建字节小程序资产时，小程序调起链接存在两种录入方式：
 * 1. 通过参数 app_page.link 录入完整的链接信息。
 * 2. 通过参数 app_page.start_page 与 app_page.start_param 利用平台能力生成调起链接，进而录入链接信息。
 *
 * 请注意：两种方式仅生效一种。当以上三个参数均有值时，将按照方式1.生效逻辑。
 *
 * 方式1.录入链接信息：链接中可包含自定义的参数，但需确保链接能够成功调起小程序。以此方式创建资产，仅生效参数 app_page.link 。
 * 若同时传入参数 app_page.start_page 和 app_page.start_param ，后二者参数无效，以 app_page.link 中解析出的内容为准。
 *
 * 方式2.（推荐）录入链接信息：确保参数 app_page.link 为空值，同时参数 app_page.start_page 和 app_page.start_param 填写应符合提示规范。
 * Class ToolsMicroAppCreate.
 */
class ToolsMicroAppCreate extends RpcRequest
{
    protected string $url = '/v3.0/tools/micro_app/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主账户id.
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
