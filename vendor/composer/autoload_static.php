<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41b7e6b5ed9535ca995ca8090c740c1c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit41b7e6b5ed9535ca995ca8090c740c1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41b7e6b5ed9535ca995ca8090c740c1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41b7e6b5ed9535ca995ca8090c740c1c::$classMap;

        }, null, ClassLoader::class);
    }
}
