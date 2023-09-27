<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8788dbb6bf1fa8c0e91f144b9b0c0ba2
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8788dbb6bf1fa8c0e91f144b9b0c0ba2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8788dbb6bf1fa8c0e91f144b9b0c0ba2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8788dbb6bf1fa8c0e91f144b9b0c0ba2::$classMap;

        }, null, ClassLoader::class);
    }
}
