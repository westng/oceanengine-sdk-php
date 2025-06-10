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

namespace Api\Materials\ImageVideoMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 【代理商】上传自产首发素材至方舟（搬运治理）.
 *
 * 代理商可以通过此接口将「首发素材」上传视频素材至巨量方舟，上传后「首发素材」即可自动完成保护。
 * 前置需要先完成整体保护授权，参考详细文档介绍「搬运治理-首发保护」说明手册（可对外）。
 * 保护后系统将根据代理授权范围识别搬运素材生效打压，避免其他方抢夺代理的流量。
 *
 * 注意事项：
 * 1. 建议代理商务必将自己制作的「首发素材」先通过本接口上传到方舟平台（素材才可能按照代理授权生效，否则可能会被客户先做授权保护），避免素材被其他方抢先保护
 * 2. 非首发素材，即使进行上传也不会生效授权保护（点此查看「首发素材」相关说明）
 * 3. 调用接口上传的素材可在"方舟-优化-新版素材管理-公司素材库"查看
 * 4. 本接口支持巨量广告代理商、巨量千川代理商完成授权后，调用接口上传视频素材至巨量方舟
 * Class FileVideoAgent.
 */
class FileVideoAgent extends RpcRequest
{
    protected string $url = '/2/file/video/agent/';

    protected string $method = 'POST';

    protected string $content_type = 'multipart/form-data';
}
