<?php
declare(strict_types=1);

namespace Psr\Container\Proxy;

/**
 * @ProxyHandler
 * @\Psr\Container\Proxy\ProxyHandler
 */
class ProxyHandler
{
    public function __construct()
    {
        $table = new  \Swoole\Table(1024);
    }

    public function register()
    {
    }
}