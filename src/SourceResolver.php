<?php
declare(strict_types=1);

namespace Skernl\Container;

use Psr\Container\ContainerInterface;
use ReflectionClass;
use Skernl\Container\Contract\DefinitionInterface;
use Skernl\Container\Contract\SourceResolverInterface;
use Skernl\Container\Definition\ObjectDefinition;

/**
 * @SourceResolver
 * @\Skernl\Container\SourceResolver
 */
class SourceResolver extends Composer implements SourceResolverInterface
{
    private array $storageRoom = [];

    public function __construct(private ContainerInterface $container)
    {
    }

    public function getDefinition(string $class): DefinitionInterface
    {
        return $this->storageRoom [$class] ??= $this->autofill($class);
    }

    /**
     * @param string $class
     * @return bool
     */
    public function hasDefinition(string $class): bool
    {
        return isset(self::$source [$class]);
    }

    private function autofill(string $class): DefinitionInterface
    {
        /**
         * @var ReflectionClass $reflectClass
         */
        $reflectClass = Composer::reflectClass($class);

        if ($reflectClass->isInstantiable()) {
            return new ObjectDefinition($class);
        }
        return new ObjectDefinition($class);
    }
}