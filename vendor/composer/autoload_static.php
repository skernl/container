<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit040d9e6b7e9a56fe2de2e9ad2eb3105f
{
    public static $files = array (
        '2a4186ef2795701e91b30ded40619c1e' => __DIR__ . '/../..' . '/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Skernl\\Container\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Library\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Skernl\\Container\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/Library',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
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
