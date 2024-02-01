<?php
declare(strict_types=1);

namespace Skernl\Container\Definition;

use ReflectionParameter;
use Skernl\Container\Composer;
use Skernl\Container\Contract\DefinitionInterface;

/**
 * @ObjectDefinition
 * @\Skernl\Container\Definition\ObjectDefinition
 */
class ObjectDefinition implements DefinitionInterface
{
    private bool $instantiable;

    public function __construct(private readonly string $className)
    {
        $this->instantiable = Composer::reflectClass($this->className)->isInstantiable();
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function isInstantiable(): bool
    {
        return $this->instantiable;
    }

    /**
     * @return ReflectionParameter[]
     */
    public function getConstructParameters(): array
    {
        return Composer::reflectClass($this->className)->getConstructor()->getParameters();
    }

    public function getConstructDefaultParameters(): array
    {
        $parameters = $this->getConstructParameters();
        $params = [];
        foreach ($parameters as $parameter) {
            if ($parameter->isOptional() && $parameter->isDefaultValueAvailable()) {
                $params [$parameter->getName()] = $parameter->getDefaultValue();
            }
        }
        return $params;
    }
}