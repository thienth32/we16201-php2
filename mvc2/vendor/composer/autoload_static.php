<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5dd02a78f4bafc91db4f2b23bb5a18dc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5dd02a78f4bafc91db4f2b23bb5a18dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5dd02a78f4bafc91db4f2b23bb5a18dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5dd02a78f4bafc91db4f2b23bb5a18dc::$classMap;

        }, null, ClassLoader::class);
    }
}
