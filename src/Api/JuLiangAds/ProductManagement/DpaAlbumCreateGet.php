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

namespace Api\JuLiangAds\ProductManagement;

use Core\Profile\RpcRequest;

/**
 * 上传短剧剧目.
 *
 * 创建短剧为异步动作，提交创建任务→上传短剧完成耗时较长，创建完后返回的album_id未必处于正常状态，
 * 建议您定时轮询「查询短剧可投状态」，获取短剧创建结果和短剧是否可投。
 *
 * 特别注意：
 * 1. 请求本接口时需要使用APP Access Token
 * 2. 通过【获取APP Access Token】接口获取token
 * 3. 同时传入token对应的app_id请求
 * 4. 短剧标题命名需符合 https://www.volcengine.com/docs/4/1200126 规则
 */
class DpaAlbumCreateGet extends RpcRequest
{
    protected string $url = '/v3.0/dpa/album/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

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
}
