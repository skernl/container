<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit040d9e6b7e9a56fe2de2e9ad2eb3105f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Skernl\\Di\\' => 10,
            'Skernl\\Contract\\' => 16,
            'Skernl\\Container\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'L' => 
        array (
            'Library\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Skernl\\Di\\' => 
        array (
            0 => __DIR__ . '/..' . '/skernl/di/src',
        ),
        'Skernl\\Contract\\' => 
        array (
            0 => __DIR__ . '/..' . '/skernl/contract/src',
        ),
        'Skernl\\Container\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/Library',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Skernl\\Contract\\Cache\\CacheItemInterface' => __DIR__ . '/..' . '/skernl/contract/src/Cache/CacheItemInterface.php',
        'Skernl\\Contract\\Cache\\CacheItemPoolInterface' => __DIR__ . '/..' . '/skernl/contract/src/Cache/CacheItemPoolInterface.php',
        'Skernl\\Contract\\ContainerInterface' => __DIR__ . '/..' . '/skernl/contract/src/ContainerInterface.php',
        'Skernl\\Contract\\HttpMessage\\MessageInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/MessageInterface.php',
        'Skernl\\Contract\\HttpMessage\\RequestInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/RequestInterface.php',
        'Skernl\\Contract\\HttpMessage\\ResponseInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/ResponseInterface.php',
        'Skernl\\Contract\\HttpMessage\\ServerRequestInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/ServerRequestInterface.php',
        'Skernl\\Contract\\HttpMessage\\StreamInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/StreamInterface.php',
        'Skernl\\Contract\\HttpMessage\\UploadedFileInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/UploadedFileInterface.php',
        'Skernl\\Contract\\HttpMessage\\UriInterface' => __DIR__ . '/..' . '/skernl/contract/src/HttpMessage/UriInterface.php',
        'Skernl\\Contract\\LoggerInterface' => __DIR__ . '/..' . '/skernl/contract/src/LoggerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit040d9e6b7e9a56fe2de2e9ad2eb3105f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit040d9e6b7e9a56fe2de2e9ad2eb3105f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit040d9e6b7e9a56fe2de2e9ad2eb3105f::$classMap;

        }, null, ClassLoader::class);
    }
}
