<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06fd7b86ea9c95b2e6d6d0e3f5430fd6
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nurmukhamednurkamal\\AviaTicket\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nurmukhamednurkamal\\AviaTicket\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit06fd7b86ea9c95b2e6d6d0e3f5430fd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06fd7b86ea9c95b2e6d6d0e3f5430fd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06fd7b86ea9c95b2e6d6d0e3f5430fd6::$classMap;

        }, null, ClassLoader::class);
    }
}
