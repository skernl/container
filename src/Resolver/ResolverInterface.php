<?php
declare(strict_types=1);

namespace Skernl\Container\Resolver;

use Skernl\Container\Definition\DefinitionInterface;
use Skernl\Container\Exception\InvalidDefinitionException;

/**
 * @ResolverInterface
 * @\Skernl\Container\Resolver\ResolverInterface
 */
interface ResolverInterface
{
    /**
     * @param DefinitionInterface $definition
     * @param array $parameters
     * @return mixed
     * @throws InvalidDefinitionException
     */
    public function resolve(DefinitionInterface $definition, array $parameters = []): mixed;

    /**
     * @param DefinitionInterface $definition
     * @param array $parameters
     * @return bool
     */
    public function isResolvable(DefinitionInterface $definition, array $parameters = []): bool;
}