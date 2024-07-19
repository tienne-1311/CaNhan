<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53ac9cd5019526762f97d1270da27b28
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit53ac9cd5019526762f97d1270da27b28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53ac9cd5019526762f97d1270da27b28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53ac9cd5019526762f97d1270da27b28::$classMap;

        }, null, ClassLoader::class);
    }
}