<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite85b906c512c1ef12e2c45b562ce9457
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite85b906c512c1ef12e2c45b562ce9457::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite85b906c512c1ef12e2c45b562ce9457::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite85b906c512c1ef12e2c45b562ce9457::$classMap;

        }, null, ClassLoader::class);
    }
}
