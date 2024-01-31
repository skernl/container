<?php
declare(strict_types=1);

namespace Skernl\Container\Definition;

use ReflectionClass;

/**
 * @EnumDefinition
 * @\Skernl\Di\Definition\EnumDefinition
 */
class EnumDefinition
{
    public function __construct(ReflectionClass $reflectionClass)
    {
    }
}