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

namespace Api\JuLiangQianChuan;

use Core\Exception\OceanEngineException;
use Core\Profile\BaseModule;

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
            throw new OceanEngineException("Class {$className} not found", 500);
        }

        throw new OceanEngineException("Undefined property {$name}", 500);
    }

    /**
     * Automatically discover providers from subdirectories.
     */
    private function discoverProviders(): array
    {
        $providers = [];
        $this->scanDirectory(__DIR__, __NAMESPACE__, '', $providers);
        return $providers;
    }

    /**
     * Recursively scan directory to find Module.php files.
     */
    private function scanDirectory(string $baseDir, string $baseNamespace, string $relativePath, array &$providers): void
    {
        $currentDir = $baseDir . ($relativePath ? '/' . $relativePath : '');
        $currentNamespace = $baseNamespace . ($relativePath ? '\\' . str_replace('/', '\\', $relativePath) : '');

        $items = scandir($currentDir);
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $path = $currentDir . '/' . $item;
            if (is_dir($path)) {
                // 统一处理所有目录，不再特殊处理 Tools
                $moduleFile = $path . '/Module.php';
                if (file_exists($moduleFile)) {
                    $providers[$item] = $currentNamespace . '\\' . $item . '\Module';
                }

                // 递归扫描子目录
                $newRelativePath = $relativePath ? $relativePath . '/' . $item : $item;
                $this->scanDirectory($baseDir, $baseNamespace, $newRelativePath, $providers);
            }
        }
    }
}
