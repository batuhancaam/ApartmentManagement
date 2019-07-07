<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2267eb995f7ea5758cae31af52217b1a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Windwalker\\Edge\\' => 16,
        ),
        'S' => 
        array (
            'System\\' => 7,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Windwalker\\Edge\\' => 
        array (
            0 => __DIR__ . '/..' . '/windwalker/edge',
        ),
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/System',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2267eb995f7ea5758cae31af52217b1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2267eb995f7ea5758cae31af52217b1a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}