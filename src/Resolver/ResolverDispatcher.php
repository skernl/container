<?php
declare(strict_types=1);

namespace Skernl\Container\Resolver;

use RuntimeException;
use Skernl\Contract\ContainerInterface;
use Skernl\Container\Collector\ClassCollector;
use Skernl\Container\Definition\DefinitionInterface;
use Skernl\Container\Definition\InterfaceDefinition;
use Skernl\Container\Definition\ObjectDefinition;
use Skernl\Container\Exception\InvalidDefinitionException;

/**
 * @ResolverDispatcher
 * @\Skernl\Container\Scheduler\ResolverDispatcher
 */
class ResolverDispatcher
{
    /**
     * @var ObjectResolver $objectResolver
     */
    private ObjectResolver $objectResolver;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(private readonly ContainerInterface $container)
    {
    }

    /**
     * @param DefinitionInterface $definition
     * @return bool
     */
    public function isResolvable(DefinitionInterface $definition): bool
    {
        return $definition->isInstantiable();
    }

    /**
     * @param DefinitionInterface $definition
     * @return mixed
     * @throws InvalidDefinitionException
     */
    public function resolve(DefinitionInterface $definition): mixed
    {
        return $this->getDefinitionResolver($definition)->resolve($definition);
    }

    /**
     * @param DefinitionInterface $definition
     * @return ResolverInterface
     */
    private function getDefinitionResolver(DefinitionInterface $definition): ResolverInterface
    {
        if ($definition instanceof ObjectDefinition) {
            return $this->objectResolver ??= new ObjectResolver($this->container);
        }
        throw new RuntimeException(
            sprintf(
                'No parsing program defined for class %s definition configuration',
                get_class($definition)
            )
        );
    }
}