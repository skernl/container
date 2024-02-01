<?php
declare(strict_types=1);

namespace Skernl\Container;

use Composer\Autoload\ClassLoader;
use ReflectionAttribute;
use ReflectionClass;

/**
 * @Composer
 * @\Skernl\Di\Source\Composer
 */
class Composer
{
    static protected Composer $instance;

    static private ClassLoader $classLoader;

    static protected array $source = [];

    static protected array $annotation = [];

    static public function init(): void
    {
        self::loadClassMap();
    }

    static public function reflectClass(string $class)
    {
        return self::$source [$class];
    }

    static public function getAnnotation(string $class)
    {
        return self::$annotation [$class];
    }

    static public function hasAnnotation(string $class): bool
    {
        return isset(self::$annotation [$class]);
    }

    static private function loadClassMap(): void
    {
        $loaders = ClassLoader::getRegisteredLoaders();
        /**
         * @var ClassLoader $classLoader
         */
        self::$classLoader = reset($loaders);
        self::mountClassMap(
            array_keys(
                self::$classLoader->getClassMap()
            )
        );
        self::$classLoader->unregister();
    }

    /**
     * @param array $classMap
     * @return void
     */
    static private function mountClassMap(array $classMap): void
    {
        $class = array_shift($classMap);
        if (class_exists($class)) {
            $collector = new ReflectionClass($class);
            self::$source [$class] = $collector;
            empty($classAnnotations = $collector->getAttributes())
            || self::mountClassAnnotations($class, $classAnnotations);
        }
        empty($classMap) || self::mountClassMap($classMap);
    }

    static private function mountClassAnnotations(string $class, array $classAnnotations): void
    {
        /**
         * @var ReflectionAttribute $annotation
         */
        foreach ($classAnnotations as $annotation) {
            self::$annotation [$class] [$annotation->getName()] = $annotation->getArguments();
        }
    }
}