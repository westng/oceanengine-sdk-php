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

namespace Api\Tools\GlobalPlanningTool;

use Core\Profile\RpcRequest;

/**
 * Name 修改直播-一键控量计划调控状态
 * Class QianChuanAdControlTaskSmartControlStatusUpdate.
 */
class QianChuanAdControlTaskSmartControlStatusUpdate extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/uni_promotion/ad/control_task/smart_control/status/update/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 千川广告主ID.
     */
    protected int $advertiser_id;
}
