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

namespace Api\Tools\AppManagement;

use Core\Profile\RpcRequest;

/**
 * Name 提交解析应用包任务.
 *
 * 当您需要创建一个附加创意类型为游戏礼包码的广告计划时，如果该游戏礼包的download_url为未在字节的广告系统中上传或使用过的新download_url，则需要使用该接口提交包解析任务。
 * 使用提交解析应用包任务时，您只需要传入参数advertiser_id和该游戏礼包的download_url，即可解析出APP相关信息（包名、appname、icon等），这些信息将在礼包码原生转化卡中展示。
 * 提交解析应用包任务后，您可以使用【查询包解析状态】接口对当前包解析状态进行查询。查询到返回参数package_status为"SUCCESS"后，方可提交创建广告计划。
 * Class ToolsAppManagementPackageParse
 */
class ToolsAppManagementPackageParse extends RpcRequest
{
    protected string $url = '/2/tools/download/package/parse/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 广告主ID.
     */
    protected int $advertiser_id;
}
