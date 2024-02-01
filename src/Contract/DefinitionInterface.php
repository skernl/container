<?php
declare(strict_types=1);

namespace Skernl\Container\Contract;

use ReflectionClass;

/**
 * @DefinitionInterface
 * @\Skernl\Container\Contract\DefinitionInterface
 */
interface DefinitionInterface
{
    public function getClassName();

    public function isInstantiable();

    public function getConstructParameters();

    public function getConstructDefaultParameters();
}