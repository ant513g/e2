<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1af257db8a4c76f0394822bf55ff834
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita1af257db8a4c76f0394822bf55ff834::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1af257db8a4c76f0394822bf55ff834::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1af257db8a4c76f0394822bf55ff834::$classMap;

        }, null, ClassLoader::class);
    }
}