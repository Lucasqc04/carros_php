<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b242099c03baa48066502a6e8a33525
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b242099c03baa48066502a6e8a33525::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b242099c03baa48066502a6e8a33525::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b242099c03baa48066502a6e8a33525::$classMap;

        }, null, ClassLoader::class);
    }
}