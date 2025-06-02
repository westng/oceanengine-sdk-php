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
use OceanEngineSDK\OceanEngineAuth;

require __DIR__ . '/../index.php';
require __DIR__ . '/config.php';

$auth = new OceanEngineAuth(APPID, SECRET);

print_r($auth->getAuthCodeUrl(CALLBACK_URL, null, AUTH_CODE, 'AD'));
