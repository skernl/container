<?php
declare(strict_types=1);

namespace Skernl\Container\Resolver;

use Closure;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Skernl\Container\Contract\DefinitionInterface;
use Skernl\Container\Contract\ResolverInterface;
use Skernl\Contract\ContainerInterface;
use Skernl\Container\Definition\ObjectDefinition;
use Skernl\Container\Exception\InvalidDefinitionException;

/**
 * @ObjectResolver
 * @\Skernl\Di\Resolver\ObjectResolver
 */
class ObjectResolver implements ResolverInterface
{
    private ParameterResolver $parameterResolver;

    public function __construct(private readonly ContainerInterface $container)
    {
        $this->parameterResolver = new ParameterResolver($this->container);
    }

    /**
     * @param ObjectDefinition $definition
     * @param array $parameters
     * @return bool
     */
    public function isResolvable(DefinitionInterface $definition, array $parameters = []): bool
    {
        return $definition->isInstantiable();
    }

    /**
     * @param DefinitionInterface $definition
     * @return object
     * @throws InvalidDefinitionException
     */
    public function resolve(DefinitionInterface $definition): object
    {
        $definition instanceof ObjectDefinition || throw new InvalidDefinitionException(
            sprintf(
                'Entry "%s" cannot be resolved: the class is not instanceof %s',
                $definition->getClassName(),
                'Skernl\Di\Definition\ObjectDefinition'
            )
        );
        return $this->createInstance($definition);
    }


    /**
     * @param ObjectDefinition $objectDefinition
     * @return object
     */
    private function createInstance(ObjectDefinition $objectDefinition): object
    {
        $parameters = $this->parameterResolver->resolveParameters(
            $objectDefinition->getConstructParameters(),
            $objectDefinition->getConstructDefaultParameters(),
        );

        return new ($objectDefinition->getClassName())(... $parameters);
    }
}