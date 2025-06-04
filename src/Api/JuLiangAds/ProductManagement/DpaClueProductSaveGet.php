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
 * 创建/编辑升级版商品.
 *
 * 新增、编辑行业产品中心【产品管理-升级版】商品。
 *
 * 支持类目（截止至2024/02/11）：
 * 1. 电商店铺商品（category_id: 140000000）
 *    - 部分加白客户可用，如有创建诉求需先找相应销售同学咨询
 * 2. 活动商品（category_id: 250000000）
 *    - 功能灰度开放，如有创建诉求需先找相应销售同学咨询
 * 3. 房产（category_id: 130000000）
 *    - 功能灰度开放，如有对接诉求请联系相应销售/行运同学
 * 4. 汽车（category_id: 60000000）
 *    - 功能灰度开放，如有对接诉求请联系相应销售/行运同学
 * 5. 游戏（category_id: 260000000）
 *    - 功能灰度开放，如有对接诉求请联系相应销售/行运同学
 *
 * 相关接口：
 * - 查询升级版商品列表：https://open.oceanengine.com/labels/34/docs/1779430442685440
 * - 查询升级版商品详情：https://open.oceanengine.com/labels/34/docs/1779436000953415
 */
class DpaClueProductSaveGet extends RpcRequest
{
    protected string $url = '/2/dpa/clue_product/save/';

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
