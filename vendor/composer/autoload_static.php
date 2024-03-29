<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'E' => 
        array (
            'Exceptions\\' => 11,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Colors\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Exceptions',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$classMap;

        }, null, ClassLoader::class);
    }
}
