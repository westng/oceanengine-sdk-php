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

namespace Api\Tools\PreferredBoosting;

use Core\Exception\InvalidParamException;
use Core\Helper\RequestCheckUtil;
use Core\Profile\RpcRequest;

/**
 * Name 新建优选起量任务.
 *
 * 新建优选起量任务。
 * 账户下生效的优选起量任务数量有且只有1个。
 * 当有正在进行的优选起量任务时，不能创建新的优选起量任务。
 * 当没有正在进行的优选起量任务时，只能创建1个优选起量任务。
 * 账户状态满足"可新建起量"状态条件为：
 * i.账户下有非最大转化投放、ubmax广告（即自动投放广告）
 * ii.账户有投放中oCPM广告；
 * iii.账户当前未建立起量任务；
 * Class ToolsTaskRaiseCreate.
 */
class ToolsTaskRaiseCreate extends RpcRequest
{
    protected string $url = '/2/tools/task_raise/create/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主id.
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
