<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Timber\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Timber\\' => 
        array (
            0 => __DIR__ . '/..' . '/timber/timber/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/asm89/twig-cache-extension/lib',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'R' => 
        array (
            'Routes' => 
            array (
                0 => __DIR__ . '/..' . '/upstatement/routes',
            ),
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7eaf1e4054d5d9c7c961af7be5bbdfd5::$classMap;

        }, null, ClassLoader::class);
    }
}