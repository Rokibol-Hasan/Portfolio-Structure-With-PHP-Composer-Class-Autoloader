<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71b5df68304765e895a0d42d58708eaa
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71b5df68304765e895a0d42d58708eaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71b5df68304765e895a0d42d58708eaa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71b5df68304765e895a0d42d58708eaa::$classMap;

        }, null, ClassLoader::class);
    }
}
