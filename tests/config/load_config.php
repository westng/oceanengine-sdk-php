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
require_once __DIR__ . '/ConfigManager.php';

use Core\Http\HttpRequest;
use Tests\Config\ConfigManager;

// 获取配置管理器实例
$config = ConfigManager::getInstance();

// 导出为常量（兼容旧版本）
$config->exportConstants();

// 可选：设置HTTP配置
if ($config->get('HTTP_CONNECT_TIMEOUT')) {
    HttpRequest::$connectTimeout = (int) $config->get('HTTP_CONNECT_TIMEOUT');
}
if ($config->get('HTTP_READ_TIMEOUT')) {
    HttpRequest::$readTimeout = (int) $config->get('HTTP_READ_TIMEOUT');
}
// 设置重试配置
$enableRetry = $config->get('HTTP_ENABLE_RETRY', 'true') === 'true';
$maxRetries = (int) $config->get('HTTP_MAX_RETRIES', 3);
$retryDelay = (int) $config->get('HTTP_RETRY_DELAY', 1000);

// 解析业务错误码配置
$businessCodesStr = $config->get('HTTP_RETRYABLE_BUSINESS_CODES', '');
$retryableBusinessCodes = [];
if (! empty($businessCodesStr)) {
    $retryableBusinessCodes = array_map('intval', explode(',', $businessCodesStr));
}

HttpRequest::setRetryConfig(
    $maxRetries,
    $retryDelay,
    [], // 使用默认的可重试HTTP状态码
    $enableRetry,
    $retryableBusinessCodes
);
