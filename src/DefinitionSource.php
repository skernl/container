<?php
declare(strict_types=1);

namespace Skernl\Container;

use Skernl\Container\Definition\ObjectDefinition;

/**
 * @DefinitionSource
 * @\Skernl\Container\DefinitionSource
 */
class DefinitionSource
{
    private array $source = [];

    public function getDefinition(string $class)
    {
        return $this->source [$class] ??= $this->autofill($class);
    }

    private function autofill(string $class)
    {
        $definition = new ObjectDefinition($class);
        return $class;
    }
}