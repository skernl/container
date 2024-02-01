<?php
declare(strict_types=1);

namespace Skernl\Container\Contract;

/**
 * @SourceResolverInterface
 * @\Skernl\Container\Contract\SourceResolverInterface
 */
interface SourceResolverInterface
{
    public function getDefinition(string $class);

    public function hasDefinition(string $class);
}