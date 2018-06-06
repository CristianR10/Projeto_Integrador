<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87f9c613a028bee899e09bef8f67290c
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

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
        'rotas' => __DIR__ . '/../..' . '/model/rotas.class.php',
        'template' => __DIR__ . '/../..' . '/model/template.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87f9c613a028bee899e09bef8f67290c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87f9c613a028bee899e09bef8f67290c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87f9c613a028bee899e09bef8f67290c::$classMap;

        }, null, ClassLoader::class);
    }
}