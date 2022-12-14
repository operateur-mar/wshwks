<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22a56406a6d3738316c28d40cca8bce3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22a56406a6d3738316c28d40cca8bce3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22a56406a6d3738316c28d40cca8bce3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22a56406a6d3738316c28d40cca8bce3::$classMap;

        }, null, ClassLoader::class);
    }
}
