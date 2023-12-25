<?php
declare(strict_types=1);

namespace Skernl\Container;

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
    private static Container|null $instances;

    private function __construct()
    {
    }

    /**
     * @return Container|null
     */
    private function __clone()
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
     * @return object
     */
    public function get(string $id): object
    {
        if ($this->has($id)) {
            return Container::$instances;
        }
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool
    {
    }
}