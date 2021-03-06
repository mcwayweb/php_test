<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitead257a4cdd1b2c9576c8f849a0b010b
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Log\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-log/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitead257a4cdd1b2c9576c8f849a0b010b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitead257a4cdd1b2c9576c8f849a0b010b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
