<?php
declare(strict_types=1);

namespace Skernl\Container;

use ReflectionClass;

/**
 * @ReflectionManager
 * @\Skernl\Container\ReflectionManager
 */
class ReflectionManager extends Composer
{
    static private function getInstance(): Composer
    {
        return self::$instance;
    }

    static public function getReflectClass(string $class): null|ReflectionClass
    {
        return self::getInstance()->storageRoom [$class] ?? null;
    }

    static public function hasReflectClass(string $class): bool
    {
        return isset(self::getInstance()->storageRoom [$class]);
    }
}