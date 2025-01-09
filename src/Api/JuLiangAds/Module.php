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

namespace Api\JuLiangAds;

use Core\Exception\OceanEngineException;
use core\Profile\BaseModule;

class Module extends BaseModule
{
    /**
     * @var array<string, mixed>
     */
    private array $instances = [];

    /**
     * @var array<string, string>
     */
    private array $providers;

    public function __construct($client)
    {
        parent::__construct($client);
        $this->providers = $this->discoverProviders();
    }

    /**
     * @return mixed
     * @throws OceanEngineException
     */
    public function __get(string $name)
    {
        // Return cached instance if exists
        if (isset($this->instances[$name])) {
            return $this->instances[$name];
        }

        // Check if provider exists
        if (array_key_exists($name, $this->providers)) {
            $className = $this->providers[$name];
            if (class_exists($className)) {
                // Create and cache instance
                $this->instances[$name] = new $className($this->client);
                return $this->instances[$name];
            }
            throw new OceanEngineException("Class {$className} not found", '500');
        }

        throw new OceanEngineException("Undefined property {$name}", '500');
    }

    /**
     * Automatically discover providers from subdirectories.
     */
    private function discoverProviders(): array
    {
        $providers = [];
        $baseDir = __DIR__;
        $namespace = __NAMESPACE__;

        $dirs = scandir($baseDir);
        foreach ($dirs as $dir) {
            if ($dir !== '.' && $dir !== '..' && is_dir($baseDir . '/' . $dir)) {
                // 遍历子目录下的所有目录
                $subDirs = scandir($baseDir . '/' . $dir);
                foreach ($subDirs as $subDir) {
                    if ($subDir !== '.' && $subDir !== '..' && is_dir($baseDir . '/' . $dir . '/' . $subDir)) {
                        $moduleFile = $baseDir . '/' . $dir . '/' . $subDir . '/Module.php';
                        if (file_exists($moduleFile)) {
                            $providers[$subDir] = "{$namespace}\\{$dir}\\{$subDir}\\Module";
                        }
                    }
                }
            }
        }

        return $providers;
    }
}
