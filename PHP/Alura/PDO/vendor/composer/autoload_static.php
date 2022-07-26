<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4df5a836f2d03a979865bf898981d557
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4df5a836f2d03a979865bf898981d557::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4df5a836f2d03a979865bf898981d557::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4df5a836f2d03a979865bf898981d557::$classMap;

        }, null, ClassLoader::class);
    }
}
