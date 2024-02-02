<?php
declare(strict_types=1);

namespace Skernl\Container\Proxy;

use Composer\Autoload\ClassLoader;
use Swoole\Table;

/**
 * @Composer
 * @\Skernl\Container\Proxy\Composer
 */
class Composer
{
    static public function init(): void
    {
        $loaders = ClassLoader::getRegisteredLoaders();
        /**
         * @var ClassLoader $classLoader
         */
        $classLoader = reset($loaders);
//        $classLoader->unregister();
        $table = new Table(count($classLoader->getClassMap()));
    }

    static private function writeTable()
    {
    }
}