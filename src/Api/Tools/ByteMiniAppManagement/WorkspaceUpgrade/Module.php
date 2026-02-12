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

namespace Api\Tools\ByteMiniAppManagement\WorkspaceUpgrade;

use Core\Profile\BaseModule;

class Module extends BaseModule
{
    public function __call(string $name, array $arguments)
    {
        // Build class name dynamically.
        $className = __NAMESPACE__ . '\\' . ucfirst($name);

        if (class_exists($className)) {
            $instance = new $className($this->client);

            if (! empty($arguments) && method_exists($instance, $name)) {
                return call_user_func_array([$instance, $name], $arguments);
            }

            return $instance;
        }

        throw new \BadMethodCallException("Class {$className} not found in " . __NAMESPACE__);
    }
}
