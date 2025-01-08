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

    private array $providers = [
        'AccountMgmt' => AccountMgmt\AccountRel\Module::class,
    ];

    /**
     * @return mixed
     * @throws OceanEngineException
     */
    public function __get(string $name)
    {
        // 如果实例已经存在，直接返回
        if (isset($this->instances[$name])) {
            return $this->instances[$name];
        }

        // 如果在 providers 中定义了该属性
        if (array_key_exists($name, $this->providers)) {
            $className = $this->providers[$name];
            if (class_exists($className)) {
                // 创建实例并缓存
                $this->instances[$name] = new $className($this->client);
                return $this->instances[$name];
            }
            throw new OceanEngineException("Class {$className} not found", '500');
        }

        throw new OceanEngineException("Undefined property {$name}", '500');
    }
}
