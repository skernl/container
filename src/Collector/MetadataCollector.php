<?php
declare(strict_types=1);

namespace Skernl\Container\Collector;

/**
 * @MetadataCollector
 * @\Skernl\Container\Collector\MetadataCollector
 */
class MetadataCollector
{
    /**
     * @var array $container
     */
    static protected array $container = [];

    /**
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    static public function get(string $key, mixed $default = null): mixed
    {
        return array_key_exists($key, static::$container) ? static::$container [$key] : $default;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    static public function set(string $key, mixed $value): void
    {
        static::$container [$key] = $value;
    }

    /**
     * @param string $key
     * @return bool
     */
    static public function has(string $key): bool
    {
        return array_key_exists($key, static::$container);
    }

    /**
     * @param string|null $key
     * @return void
     */
    static public function remove(null|string $key): void
    {
        if (null === $key) static::$container = [];
        else unset(static::$container [$key]);
    }
}