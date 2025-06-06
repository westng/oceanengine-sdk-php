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

namespace Account\AdQualification;

use Core\Profile\BaseModule;

class Module extends BaseModule
{
    public function __call(string $name, array $arguments)
    {
        // 动态生成类名
        $className = __NAMESPACE__ . '\\' . ucfirst($name);

        // 检查类是否存在
        if (class_exists($className)) {
            // 创建类实例
            $instance = new $className($this->client);

            // 如果类中存在对应方法，则调用并传递参数
            if (! empty($arguments) && method_exists($instance, $name)) {
                return call_user_func_array([$instance, $name], $arguments);
            }

            // 如果类中没有对应方法，直接返回实例
            return $instance;
        }

        // 如果类不存在，抛出异常
        throw new \BadMethodCallException("Class {$className} not found in " . __NAMESPACE__);
    }
}
