<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39af698ca117ed648f3ae8bbaee28de4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39af698ca117ed648f3ae8bbaee28de4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39af698ca117ed648f3ae8bbaee28de4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
