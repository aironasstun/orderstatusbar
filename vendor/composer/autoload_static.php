<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7192161e24013b979c279e794b06d5f4
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'orderstatusbar\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'orderstatusbar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'OrderStatusBar' => __DIR__ . '/../..' . '/orderstatusbar.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7192161e24013b979c279e794b06d5f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7192161e24013b979c279e794b06d5f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7192161e24013b979c279e794b06d5f4::$classMap;

        }, null, ClassLoader::class);
    }
}
