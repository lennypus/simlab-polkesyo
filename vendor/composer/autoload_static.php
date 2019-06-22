<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14d06c8d8eb9ee54acb8f1adf7f3d71c
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riesenia\\Cart\\' => 14,
        ),
        'L' => 
        array (
            'Litipk\\BigNumbers\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riesenia\\Cart\\' => 
        array (
            0 => __DIR__ . '/..' . '/riesenia/cart/src',
        ),
        'Litipk\\BigNumbers\\' => 
        array (
            0 => __DIR__ . '/..' . '/litipk/php-bignumbers/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14d06c8d8eb9ee54acb8f1adf7f3d71c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14d06c8d8eb9ee54acb8f1adf7f3d71c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}