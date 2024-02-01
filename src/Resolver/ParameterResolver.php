<?php
declare(strict_types=1);

namespace Skernl\Container\Resolver;

use Psr\Container\ContainerInterface;
use ReflectionParameter;

/**
 * @ParameterResolver
 * @\Skernl\Di\Resolver\ParameterResolver
 */
readonly class ParameterResolver
{
    public function __construct(private ContainerInterface $container)
    {
    }

    /**
     * @param ReflectionParameter[] $parameters
     * @param array-key[] $arguments
     * @return array
     */
    public function resolveParameters(array $parameters, array $arguments = []): array
    {
        $params = [];
        foreach ($parameters as $parameter) {
            if (isset($arguments [$parameter->getName()])) {
                $params [] = $arguments [$parameter->getName()];
            } else {
                $params [] = $this->container->get($parameter->getName());
            }
        }
        return $params;
    }
}