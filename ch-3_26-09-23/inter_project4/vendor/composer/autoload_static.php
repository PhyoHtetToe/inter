<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit646e45d4b38ff4d400823e7105a11118
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hum\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/hum',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Best' => __DIR__ . '/../..' . '/app/Best.php',
        'app\\Home' => __DIR__ . '/../..' . '/app/Home.php',
        'app\\control\\Hack' => __DIR__ . '/../..' . '/app/control/Hack.php',
        'app\\middleware\\Filter' => __DIR__ . '/../..' . '/app/middleware/Filter.php',
        'hum\\Hum' => __DIR__ . '/../..' . '/hum/Hum.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit646e45d4b38ff4d400823e7105a11118::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit646e45d4b38ff4d400823e7105a11118::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit646e45d4b38ff4d400823e7105a11118::$classMap;

        }, null, ClassLoader::class);
    }
}
