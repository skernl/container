<?php
declare(strict_types=1);

namespace Skernl\Container;
interface ContainerInterface extends \Psr\Container\ContainerInterface
{
    /**
     * @param string $id
     * @return object
     */
    public function get(string $id): object;

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool;
}