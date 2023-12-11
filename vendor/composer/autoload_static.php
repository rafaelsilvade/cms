<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17b7f18bc6f738acdc6aae44aa37933b
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/phpseclib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17b7f18bc6f738acdc6aae44aa37933b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17b7f18bc6f738acdc6aae44aa37933b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17b7f18bc6f738acdc6aae44aa37933b::$classMap;

        }, null, ClassLoader::class);
    }
}