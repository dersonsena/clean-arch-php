<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5852caa3c9916fdd5c7ddb7d15522fdd
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\Psr7\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'F' => 
        array (
            'Fig\\Http\\Message\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/psr7/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5852caa3c9916fdd5c7ddb7d15522fdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5852caa3c9916fdd5c7ddb7d15522fdd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
