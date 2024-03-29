<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb734838c97462b3b224bb514c7096d9c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb734838c97462b3b224bb514c7096d9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb734838c97462b3b224bb514c7096d9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb734838c97462b3b224bb514c7096d9c::$classMap;

        }, null, ClassLoader::class);
    }
}
