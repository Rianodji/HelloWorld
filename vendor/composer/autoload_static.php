<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit747fe05a6becba6d6660b43fa8c25462
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rianodji\\HelloWorld\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rianodji\\HelloWorld\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit747fe05a6becba6d6660b43fa8c25462::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit747fe05a6becba6d6660b43fa8c25462::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit747fe05a6becba6d6660b43fa8c25462::$classMap;

        }, null, ClassLoader::class);
    }
}
