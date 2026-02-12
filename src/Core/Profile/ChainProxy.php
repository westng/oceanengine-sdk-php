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

namespace Core\Profile;

use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineClient;

class ChainProxy extends BaseModule
{
    private string $namespace;

    /**
     * @var array<string, self>
     */
    private array $instances = [];

    /**
     * @var array<string, array<string, string>>
     */
    private static array $providerCache = [];

    /**
     * @var array<string, array<string, string>>
     */
    private static array $childClassCache = [];

    public function __construct(OceanEngineClient $client, string $namespace)
    {
        parent::__construct($client);
        $this->namespace = trim($namespace, '\\');
    }

    /**
     * @throws OceanEngineException
     */
    public function __get(string $name): self
    {
        if (isset($this->instances[$name])) {
            return $this->instances[$name];
        }

        $providers = $this->discoverProviders();
        if (! array_key_exists($name, $providers)) {
            throw new OceanEngineException("Undefined property {$name}", 500);
        }

        $this->instances[$name] = new self($this->client, $providers[$name]);

        return $this->instances[$name];
    }

    /**
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        $classBaseName = ucfirst($name);
        $className = $this->namespace . '\\' . $classBaseName;
        $classFile = $this->namespaceToDir($this->namespace) . '/' . $classBaseName . '.php';

        if (is_file($classFile) && class_exists($className)) {
            $instance = new $className($this->client);

            if (! empty($arguments) && method_exists($instance, $name)) {
                return call_user_func_array([$instance, $name], $arguments);
            }

            return $instance;
        }

        // 兼容历史行为：支持在当前节点直接调用子目录中的请求类（如 CommentMgmt->ToolsCommentTermsBannedAdd）。
        $childClassName = $this->resolveChildClass($classBaseName);
        if ($childClassName !== null) {
            return new $childClassName($this->client);
        }

        try {
            return $this->__get($name);
        } catch (OceanEngineException $e) {
            throw new \BadMethodCallException("Class {$className} not found in {$this->namespace}");
        }
    }

    /**
     * @return array<string, string>
     */
    private function discoverProviders(): array
    {
        if (isset(self::$providerCache[$this->namespace])) {
            return self::$providerCache[$this->namespace];
        }

        $baseDir = $this->namespaceToDir($this->namespace);
        if ($baseDir === '' || ! is_dir($baseDir)) {
            self::$providerCache[$this->namespace] = [];
            return [];
        }

        $providers = [];
        $this->scanDirectory($baseDir, $this->namespace, '', $providers);

        self::$providerCache[$this->namespace] = $providers;

        return $providers;
    }

    /**
     * @param array<string, string> $providers
     */
    private function scanDirectory(string $baseDir, string $baseNamespace, string $relativePath, array &$providers): void
    {
        $currentDir = $baseDir . ($relativePath !== '' ? '/' . $relativePath : '');
        $currentNamespace = $baseNamespace . ($relativePath !== '' ? '\\' . str_replace('/', '\\', $relativePath) : '');

        $items = scandir($currentDir);
        if ($items === false) {
            return;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $path = $currentDir . '/' . $item;
            if (! is_dir($path)) {
                continue;
            }

            $providers[$item] = $currentNamespace . '\\' . $item;

            $newRelativePath = $relativePath !== '' ? $relativePath . '/' . $item : $item;
            $this->scanDirectory($baseDir, $baseNamespace, $newRelativePath, $providers);
        }
    }

    private function namespaceToDir(string $namespace): string
    {
        $prefix = 'Api';
        if ($namespace !== $prefix && ! str_starts_with($namespace, $prefix . '\\')) {
            return '';
        }

        $relative = substr($namespace, strlen($prefix));
        $relative = ltrim(str_replace('\\', '/', $relative), '/');

        $apiBaseDir = dirname(__DIR__, 2) . '/Api';

        return $relative === '' ? $apiBaseDir : $apiBaseDir . '/' . $relative;
    }

    private function resolveChildClass(string $classBaseName): ?string
    {
        $childClasses = $this->discoverChildClasses();
        if (! isset($childClasses[$classBaseName])) {
            return null;
        }

        return $childClasses[$classBaseName];
    }

    /**
     * @return array<string, string>
     */
    private function discoverChildClasses(): array
    {
        if (isset(self::$childClassCache[$this->namespace])) {
            return self::$childClassCache[$this->namespace];
        }

        $baseDir = $this->namespaceToDir($this->namespace);
        if ($baseDir === '' || ! is_dir($baseDir)) {
            self::$childClassCache[$this->namespace] = [];
            return [];
        }

        $classes = [];
        $items = scandir($baseDir);
        if ($items === false) {
            self::$childClassCache[$this->namespace] = [];
            return [];
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $childDir = $baseDir . '/' . $item;
            if (! is_dir($childDir)) {
                continue;
            }

            foreach (glob($childDir . '/*.php') ?: [] as $file) {
                $classBaseName = pathinfo($file, PATHINFO_FILENAME);
                if ($classBaseName === '') {
                    continue;
                }

                if (! isset($classes[$classBaseName])) {
                    $classes[$classBaseName] = $this->namespace . '\\' . $item . '\\' . $classBaseName;
                }
            }
        }

        self::$childClassCache[$this->namespace] = $classes;

        return $classes;
    }
}
