<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit256d2a2c6ca103c820819a511a0787a8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit256d2a2c6ca103c820819a511a0787a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit256d2a2c6ca103c820819a511a0787a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit256d2a2c6ca103c820819a511a0787a8::$classMap;

        }, null, ClassLoader::class);
    }
}
