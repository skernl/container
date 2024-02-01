<?php
declare(strict_types=1);

namespace Skernl\Container\Contract;

use Skernl\Container\Exception\InvalidDefinitionException;

/**
 * @ResolverInterface
 * @\Skernl\Container\Resolver\ResolverInterface
 */
interface ResolverInterface
{
    /**
     * @param DefinitionInterface $definition
     * @return mixed
     * @throws InvalidDefinitionException
     */
    public function resolve(DefinitionInterface $definition): mixed;

    /**
     * @param DefinitionInterface $definition
     * @return bool
     */
    public function isResolvable(DefinitionInterface $definition): bool;
}