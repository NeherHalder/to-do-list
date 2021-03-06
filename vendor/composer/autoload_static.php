<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea0458afaeada965ffdcdaea03c22366
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea0458afaeada965ffdcdaea03c22366::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea0458afaeada965ffdcdaea03c22366::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea0458afaeada965ffdcdaea03c22366::$classMap;

        }, null, ClassLoader::class);
    }
}
