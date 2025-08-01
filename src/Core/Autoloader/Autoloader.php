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

namespace Core\Autoloader;

class Autoloader
{
    private static array $autoloadPathArray = [
        'Core',      // src/Core 核心包
        'Api',       // src/Api API接口
        'AdOauth',   // src/AdOauth Oauth2.0授权
        'Account',   // src/Account 账号服务
    ];

    private static array $replacePath = [
        'OceanEngineSDK\\' => 'Core\Profile\\',
    ];

    /**
     * 自动加载类.
     *
     * @param string $className 类名
     */
    public static function autoload(string $className): void
    {
        // 只处理项目自己的类，第三方类交给Composer处理
        if (! str_starts_with($className, 'Core\\')
            && ! str_starts_with($className, 'Api\\')
            && ! str_starts_with($className, 'AdOauth\\')
            && ! str_starts_with($className, 'Account\\')
            && ! str_starts_with($className, 'OceanEngineSDK\\')
            && ! str_starts_with($className, 'Tests\\')) {
            return; // 不是项目类，让其他自动加载器处理
        }

        // 获取当前目录
        $directories = dirname(__DIR__, 2);

        // 替换命名空间映射
        foreach (self::$replacePath as $namespace => $replacement) {
            if (str_starts_with($className, $namespace)) {
                $className = str_replace($namespace, $replacement, $className);
                break;
            }
        }

        // 确保路径映射正确
        foreach (self::$autoloadPathArray as $path) {
            $path = $directories . DIRECTORY_SEPARATOR . $path;
            if (is_dir($path)) {
                // 遍历目录及其子目录加载 PHP 文件
                foreach (glob($path . '/**/*.php') as $file) {
                    include_once $file;
                }
            }
        }

        // 根据类名获取文件路径
        $file = $directories . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

        // 如果文件存在则加载
        if (is_file($file)) {
            include_once $file;
            return; // 找到并加载文件后退出
        }

        // 特殊处理Tests命名空间
        if (str_starts_with($className, 'Tests\\')) {
            // Tests\Config\ConfigManager -> tests/config/ConfigManager.php
            $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, substr($className, 6));
            $testFile = dirname($directories) . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . $relativePath . '.php';
            if (is_file($testFile)) {
                include_once $testFile;
                return; // 找到并加载文件后退出
            }
        }

        // 如果没有找到文件，记录错误但不抛出异常
        echo "File not found for class: {$className}\n";
    }

    /**
     * 加载当前目录下的所有子目录.
     */
    public static function loadDirectories(): void
    {
        $directories = dirname(__DIR__, 2);
        foreach (glob($directories . DIRECTORY_SEPARATOR . '*') as $directory) {
            if (is_dir($directory) && basename($directory) !== 'Core') {
                self::$autoloadPathArray[] = basename($directory);
            }
        }
    }

    /**
     * 添加新的自动加载路径.
     *
     * @param string $path 新的路径
     */
    public static function addAutoloadPath(string $path): void
    {
        self::$autoloadPathArray[] = $path;
    }
}

// 注册自动加载器（不抛出异常，让其他自动加载器有机会处理）
spl_autoload_register(['Core\Autoloader\Autoloader', 'autoload'], true, false);
