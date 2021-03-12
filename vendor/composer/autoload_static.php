<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a847cba6ec5a894bae120833fb04d85
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a847cba6ec5a894bae120833fb04d85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a847cba6ec5a894bae120833fb04d85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a847cba6ec5a894bae120833fb04d85::$classMap;

        }, null, ClassLoader::class);
    }
}