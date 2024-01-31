<?php
declare(strict_types=1);

namespace Skernl\Container\Resolver;

use Psr\Container\ContainerInterface;
use Skernl\Container\Definition\ObjectDefinition;

/**
 * @ParameterResolver
 * @\Skernl\Di\Resolver\ParameterResolver
 */
class ParameterResolver
{
    public function __construct(private ContainerInterface $container)
    {
    }

    public function resolveParameters(ObjectDefinition $objectDefinition)
    {
        $parameters = $objectDefinition->getMethodParameters();
    }
}