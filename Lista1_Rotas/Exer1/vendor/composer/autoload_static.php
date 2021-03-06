<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit940fe76e52e7adddc90046391b202b0d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\Aula0405\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\Aula0405\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit940fe76e52e7adddc90046391b202b0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit940fe76e52e7adddc90046391b202b0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit940fe76e52e7adddc90046391b202b0d::$classMap;

        }, null, ClassLoader::class);
    }
}
