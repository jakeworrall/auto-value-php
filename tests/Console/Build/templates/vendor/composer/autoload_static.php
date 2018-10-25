<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfde5e053bc6b07bb25d2af241edcb63e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyTemplates\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyTemplates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfde5e053bc6b07bb25d2af241edcb63e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfde5e053bc6b07bb25d2af241edcb63e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
