<?php
declare(strict_types=1);

namespace Skernl\Container\Definition;

use ReflectionAttribute;
use ReflectionException;
use ReflectionParameter;
use Skernl\Container\Exception\InvalidDefinitionException;
use Skernl\Container\ReflectionManager;

/**
 * @ObjectDefinition
 * @\Skernl\Di\Definition\ObjectDefinition
 */
class ObjectDefinition implements DefinitionInterface
{
    protected bool $classExist;
    protected bool $instantiable;

    public function __construct(private readonly string $className)
    {
        $this->init();
    }

    private function init(): void
    {
        $this->classExist = ReflectionManager::hasReflectClass($this->className);
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
     * @return ReflectionAttribute[]
     */
    public function getClassAnnotations(): array
    {
        return $this->reflectionClass->getAttributes();
    }

//    public function getProperties(): array
//    {
//        // TODO: Implement getProperties() method.
//    }
//
    /**
     * @param string $method
     * @return ReflectionParameter[]
     * @throws InvalidDefinitionException
     */
    public function getMethodParameters(string $method): array
    {
        try {
            return $this->reflectionClass->getMethod($method)->getParameters();
        } catch (ReflectionException) {
            throw new InvalidDefinitionException(
                sprintf(
                    'Method %s does not exist in Class %s',
                    '__construct',
                    $this->getClassName(),
                )
            );
        }
    }

    /**
     * @param string $method
     * @return array
     * @throws InvalidDefinitionException
     */
    public function getMethodDefaultParameters(string $method): array
    {
        $params = [];
        foreach ($this->getMethodParameters($method) as $parameter) {
            if ($parameter->isDefaultValueAvailable()) {
                $params [$parameter->getName()] = $parameter->getDefaultValue();
            }
        }

        return $params;
    }

    public function hasMethod(string $method): bool
    {
        return $this->reflectionClass->hasMethod($method);
    }
}