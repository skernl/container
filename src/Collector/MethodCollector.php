<?php
declare(strict_types=1);

namespace Skernl\Container\Collector;

/**
 * @MethodCollector
 * @\Skernl\Di\Collector\MethodCollector
 */
class MethodCollector extends AbstractMetadataCollector
{
    static public function collect(
        string $class,
        string $method,
        string $annotation,
        mixed  $value
    ): void
    {
        self::$storageRoom [self::$method] [$class] [$method] [$annotation] = $value;
    }

//
//    /**
//     * @param string $className
//     * @param string $methodName
//     * @return array
//     * @throws ReflectionException
//     */
//    static public function getParameters(string $className, string $methodName): array
//    {
//        $key = $className . '::' . $methodName;
//        if (static::has($key)) {
//            return static::get($key);
//        }
//        $parameters = ReflectionManager::reflectMethod($className, $methodName)
//            ->getParameters();
//        $defaultParameters = [];
//        foreach ($parameters as $parameter) {
//            $types = $parameter->getType()->getTypes();
//            $param = [
//                'name' => $parameter->getName(),
//                'allowsNull' => $parameter->allowsNull(),
//            ];
//            if (in_array([
//                'bool',
//                'int',
//                'float',
//                'string',
//                'array'
//            ], $types)) {
//                $param  ['type'] = $types;
//                $parameter->isDefaultValueAvailable()
//                && $param ['defaultValue'] = $parameter->getDefaultValue();
//                return $param;
//            } else {
//                $param ['type'] = 'object';
//            }
//            $defaultParameters [] = &$param;
//        }
//        return self::$storageRoom [$key] = &$defaultParameters;
//    }

}