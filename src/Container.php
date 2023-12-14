<?php
declare(strict_types=1);

namespace Skernl\Container;

use Skernl\Container\Collector\MetadataCollector;
use Skernl\Container\Exception\NotFoundException;
use Skernl\Contract\ContainerInterface;

/**
 * @Container
 * @\Skernl\Container\Container
 */
final class Container implements ContainerInterface
{
    /**
     * @var array $container
     */
    private array $container;

    /**
     * @var Container|null
     */
    private static Container|null $instances = null;

    private function __construct()
    {
    }

    /**
     * @return Container|null
     */
    public function __clone()
    {
        return Container::$instances;
    }

    /**
     * @return Container
     */
    static public function getContainer(): Container
    {
        if (null === Container::$instances) {
            Container::$instances = new Container;
        }

        return Container::$instances;
    }

    /**
     * @param string $id
     * @return mixed
     * @throws NotFoundException
     */
    public function get(string $id): object
    {
        if ($this->has($id)) {
            return MetadataCollector::get($id);
        }

        throw new NotFoundException("No entry or class found for $id");
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool
    {
        return MetadataCollector::has($id);
    }
}