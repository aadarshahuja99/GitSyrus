<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1f1bb47ef4dcc1584df849ca51b7699
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1f1bb47ef4dcc1584df849ca51b7699::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1f1bb47ef4dcc1584df849ca51b7699::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
