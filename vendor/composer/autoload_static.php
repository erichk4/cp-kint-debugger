<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita91d8dedddc554587daff9be48e91244
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kint\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita91d8dedddc554587daff9be48e91244::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita91d8dedddc554587daff9be48e91244::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita91d8dedddc554587daff9be48e91244::$classMap;

        }, null, ClassLoader::class);
    }
}
