<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48a1cf2399791b7cd14916969e99b6bd
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hb\\Recipe\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hb\\Recipe\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit48a1cf2399791b7cd14916969e99b6bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48a1cf2399791b7cd14916969e99b6bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48a1cf2399791b7cd14916969e99b6bd::$classMap;

        }, null, ClassLoader::class);
    }
}