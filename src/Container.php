<?php
declare(strict_types=1);

namespace Skernl\Container;
final class Container implements ContainerInterface
{

    /**
     * @var Container|null
     */
    private static Container|null $container;

    private function __construct()
    {
    }

    /**
     * @return Container|null
     */
    public function __clone()
    {
        return Container::$container;
    }

    /**
     * @return Container
     */
    static public function getContainer(): Container
    {
        if (null === Container::$container) {
            Container::$container = new Container;
        }

        return Container::$container;
    }

    /**
     * @param string $id
     * @return object
     */
    public function get(string $id): object
    {
        // TODO: Implement get() method.
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool
    {
        // TODO: Implement has() method.
    }
}