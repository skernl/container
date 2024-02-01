<?php
declare(strict_types=1);

namespace Skernl\Container\Definition;

use Skernl\Container\Contract\DefinitionInterface;

/**
 * @InterfaceDefinition
 * @\Skernl\Container\Definition\InterfaceDefinition
 */
class InterfaceDefinition implements DefinitionInterface
{
    public function __construct()
    {
    }

    #[\Override] public function getClassName()
    {
        // TODO: Implement getClassName() method.
    }

    #[\Override] public function isInstantiable()
    {
        // TODO: Implement isInstantiable() method.
    }

    #[\Override] public function getConstructParameters()
    {
        // TODO: Implement getConstructParameters() method.
    }

    #[\Override] public function getConstructDefaultParameters()
    {
        // TODO: Implement getConstructDefaultParameters() method.
    }
}