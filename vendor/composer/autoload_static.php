<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit783fcaec0b3eff6f52019c431f5266b9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Arostech\\ApiControllerPackage\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Arostech\\ApiControllerPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit783fcaec0b3eff6f52019c431f5266b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit783fcaec0b3eff6f52019c431f5266b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit783fcaec0b3eff6f52019c431f5266b9::$classMap;

        }, null, ClassLoader::class);
    }
}
