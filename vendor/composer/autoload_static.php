<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8047fef4796ab3929c5e8138a571007
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8047fef4796ab3929c5e8138a571007::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8047fef4796ab3929c5e8138a571007::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8047fef4796ab3929c5e8138a571007::$classMap;

        }, null, ClassLoader::class);
    }
}
