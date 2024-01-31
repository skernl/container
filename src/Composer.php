<?php
declare(strict_types=1);

namespace Skernl\Container;

use Composer\Autoload\ClassLoader;
use ReflectionAttribute;
use ReflectionClass;
use Skernl\Di\DependencyInjection;

/**
 * @Composer
 * @\Skernl\Di\Source\Composer
 */
class Composer
{
    static protected Composer $instance;

    private ClassLoader $classLoader;

    protected array $storageRoom = [];

    protected array $annotation = [];

    private function __construct()
    {
        $this->loadClassMap();
        $this->mountClassMap(
            array_keys(
                $this->classLoader->getClassMap()
            )
        );
    }

    static public function init(): Composer
    {
        isset(self::$instance) || self::$instance = new static;
        return self::$instance;
    }

    private function loadClassMap(): void
    {
        $loaders = ClassLoader::getRegisteredLoaders();
        /**
         * @var ClassLoader $classLoader
         */
        $this->classLoader = reset($loaders);
        $this->mountClassMap(
            array_keys(
                $this->classLoader->getClassMap()
            )
        );
    }

    /**
     * @param array $classMap
     * @return void
     */
    private function mountClassMap(array $classMap): void
    {
        $class = array_shift($classMap);
        if (class_exists($class)) {
            $collector = new ReflectionClass($class);
            $this->storageRoom [$class] = $collector;
//            empty($classAnnotations = $collector->getClassAnnotations())
//            || $this->>mountClassAnnotations($class, $classAnnotations);
        }
        empty($classMap) || $this->mountClassMap($classMap);
    }

    private function mountClassAnnotations(string $class, array $classAnnotations): void
    {
        /**
         * @var ReflectionAttribute $annotation
         */
        foreach ($classAnnotations as $annotation) {
            $this->annotation [$annotation->getName()] [$class] = $annotation->getArguments();
        }
    }

    public function __invoke(): object
    {
        $this->classLoader->unregister();
//        $object = new DependencyInjection();
        $object = (new ReflectionClass(DependencyInjection::class))->newInstanceArgs();

        return new class() {
            public function register()
            {
                var_dump(class_exists(\App\Controller\IndexController::class));
            }
        };

    }
}