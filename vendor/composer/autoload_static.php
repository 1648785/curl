<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit827945e76601d80ab260159ac14904df
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lee\\Curl\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lee\\Curl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit827945e76601d80ab260159ac14904df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit827945e76601d80ab260159ac14904df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit827945e76601d80ab260159ac14904df::$classMap;

        }, null, ClassLoader::class);
    }
}
