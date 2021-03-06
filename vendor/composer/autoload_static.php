<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0abc68e9b344c832ecd0e7594e9aacf2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0abc68e9b344c832ecd0e7594e9aacf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0abc68e9b344c832ecd0e7594e9aacf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0abc68e9b344c832ecd0e7594e9aacf2::$classMap;

        }, null, ClassLoader::class);
    }
}
