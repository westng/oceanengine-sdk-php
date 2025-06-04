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

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * 删除升级版商品.
 *
 * 对广告主创建的「升级版」商品进行删除操作。
 *
 * 注意事项：
 * 1. 已经关联计划的商品不允许进行删除
 * 2. 支持批量删除，一次性调用最大个数为100
 * 3. 服务为部分成功部分失败
 *
 * 支持的删除方式：
 * 1. 电商店铺商品（category_id: 140000000）
 *    - 支持按照店铺ID+外部商品ID删除
 *
 * 2. 其他类目商品（按照product_id指定删除）：
 *    - 活动商品（category_id: 250000000）
 *    - 房产（category_id: 130000000）
 *    - 招商加盟（category_id: 240000000）
 *    - 教育培训（category_id: 40000000）
 *    - 医疗服务（category_id: 50900000）
 *    - 人资代招（category_id: 110100000）
 *    - 岗位招聘（category_id: 120000000）
 */
class DpaClueProductDelete extends RpcRequest
{
    protected string $url = '/2/dpa/clue_product/delete/';

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
