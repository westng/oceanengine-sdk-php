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
use Core\Autoloader\Autoloader;

// 加载Composer自动加载器（用于第三方依赖）
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// 加载自定义自动加载器
require_once __DIR__ . '/src/Core/Autoloader/Autoloader.php';
Autoloader::loadDirectories();

// 加载测试配置（如果存在）
if (file_exists(__DIR__ . '/tests/config/load_config.php')) {
    require_once __DIR__ . '/tests/config/load_config.php';
}
