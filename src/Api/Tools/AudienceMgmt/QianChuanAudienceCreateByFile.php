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

namespace Api\Tools\AudienceMgmt;

use Core\Profile\RpcRequest;

/**
 * Name 上传人群
 * Class QianChuanAudienceCreateByFile.
 */
class QianChuanAudienceCreateByFile extends RpcRequest
{
    protected string $url = '/v1.0/qianchuan/audience/create_by_file/';

    protected string $method = 'POST';

    protected string $content_type = 'application/json';

    /**
     * 操作的广告主id.
     */
    protected int $advertiser_id;
}
