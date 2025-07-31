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

namespace Tests\Config;

class ConfigManager
{
    private static ?ConfigManager $instance = null;

    private array $config = [];

    private bool $loaded = false;

    private function __construct()
    {
        $this->loadConfig();
    }

    public static function getInstance(): ConfigManager
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 获取配置值
     * @param null|mixed $default
     */
    public function get(string $key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }

    /**
     * 设置配置值
     * @param mixed $value
     */
    public function set(string $key, $value): void
    {
        $this->config[$key] = $value;
    }

    /**
     * 获取所有配置.
     */
    public function getAll(): array
    {
        return $this->config;
    }

    /**
     * 获取APPID.
     */
    public function getAppId(): string
    {
        return $this->get('APPID');
    }

    /**
     * 获取SECRET.
     */
    public function getSecret(): string
    {
        return $this->get('SECRET');
    }

    /**
     * 获取AUTH_CODE.
     */
    public function getAuthCode(): string
    {
        return $this->get('AUTH_CODE');
    }

    /**
     * 获取TOKEN.
     */
    public function getToken(): string
    {
        return $this->get('TOKEN');
    }

    /**
     * 获取REFRESH_TOKEN.
     */
    public function getRefreshToken(): string
    {
        return $this->get('REFRESH_TOKEN');
    }

    /**
     * 获取ADVERTISER_ID.
     */
    public function getAdvertiserId(): int
    {
        return (int) $this->get('ADVERTISER_ID');
    }

    /**
     * 获取ADVERTISER_IDS.
     */
    public function getAdvertiserIds(): array
    {
        $ids = $this->get('ADVERTISER_IDS');
        if (is_string($ids)) {
            return json_decode($ids, true) ?: [];
        }
        return is_array($ids) ? $ids : [];
    }

    /**
     * 获取CALLBACK_URL.
     */
    public function getCallbackUrl(): string
    {
        return $this->get('CALLBACK_URL');
    }

    /**
     * 检查是否为测试环境.
     */
    public function isTestEnvironment(): bool
    {
        return $this->get('APP_ENV', 'test') === 'test';
    }

    /**
     * 重新加载配置.
     */
    public function reload(): void
    {
        $this->loaded = false;
        $this->config = [];
        $this->loadConfig();
    }

    /**
     * 导出为常量（兼容旧版本）.
     */
    public function exportConstants(): void
    {
        if (! defined('APPID')) {
            define('APPID', $this->getAppId());
        }
        if (! defined('SECRET')) {
            define('SECRET', $this->getSecret());
        }
        if (! defined('AUTH_CODE')) {
            define('AUTH_CODE', $this->getAuthCode());
        }
        if (! defined('TOKEN')) {
            define('TOKEN', $this->getToken());
        }
        if (! defined('REFRESH_TOKEN')) {
            define('REFRESH_TOKEN', $this->getRefreshToken());
        }
        if (! defined('ADVERTISER_ID')) {
            define('ADVERTISER_ID', $this->getAdvertiserId());
        }
        if (! defined('ADVERTISER_IDS')) {
            define('ADVERTISER_IDS', $this->getAdvertiserIds());
        }
        if (! defined('CALLBACK_URL')) {
            define('CALLBACK_URL', $this->getCallbackUrl());
        }
    }

    /**
     * 加载配置.
     */
    private function loadConfig(): void
    {
        if ($this->loaded) {
            return;
        }

        // 1. 加载.env文件
        $this->loadEnvFile();

        // 2. 设置默认配置
        $this->setDefaultConfig();

        // 3. 从环境变量覆盖配置
        $this->loadFromEnvironment();

        $this->loaded = true;
    }

    /**
     * 加载.env文件.
     */
    private function loadEnvFile(): void
    {
        $envFile = dirname(__DIR__, 2) . '/.env';
        if (! file_exists($envFile)) {
            return;
        }

        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            // 跳过注释
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            // 解析KEY=VALUE格式
            if (strpos($line, '=') !== false) {
                [$key, $value] = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value, '"\'');

                // 移除引号
                if ((strpos($value, '"') === 0 && strrpos($value, '"') === strlen($value) - 1)
                    || (strpos($value, "'") === 0 && strrpos($value, "'") === strlen($value) - 1)) {
                    $value = substr($value, 1, -1);
                }

                $this->config[$key] = $value;
            }
        }
    }

    /**
     * 设置默认配置.
     */
    private function setDefaultConfig(): void
    {
        $defaults = [
            'APPID' => '1784613942414368',
            'SECRET' => '7578eb5922d27b5e9ad5cacbd0175395dd1509b7',
            'AUTH_CODE' => 'WEST',
            'TOKEN' => 'e78583a31ef1622cf13127c9aeab82d9ef80a383',
            'REFRESH_TOKEN' => 'a4a5d9bbc68047d4737af66b2e298cdc7515c2b3',
            'ADVERTISER_ID' => '1805994941666500',
            'ADVERTISER_IDS' => '[1805994941666500]',
            'CALLBACK_URL' => 'https://back.recyou.cn/api/massive/callback/index',
        ];

        foreach ($defaults as $key => $value) {
            if (! isset($this->config[$key])) {
                $this->config[$key] = $value;
            }
        }
    }

    /**
     * 从环境变量加载配置.
     */
    private function loadFromEnvironment(): void
    {
        $envKeys = [
            'APPID', 'SECRET', 'AUTH_CODE', 'TOKEN', 'REFRESH_TOKEN',
            'ADVERTISER_ID', 'ADVERTISER_IDS', 'CALLBACK_URL',
        ];

        foreach ($envKeys as $key) {
            $envValue = getenv($key);
            if ($envValue !== false) {
                $this->config[$key] = $envValue;
            }
        }
    }
}
