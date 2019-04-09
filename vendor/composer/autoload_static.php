<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78b1922b8102c4b4d425a5476ce4478e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\ACF\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\ACF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGraphQL\\ACF\\ACF' => __DIR__ . '/../..' . '/src/class-acf.php',
        'WPGraphQL\\ACF\\ACF_Settings' => __DIR__ . '/../..' . '/src/class-acfsettings.php',
        'WPGraphQL\\ACF\\Config' => __DIR__ . '/../..' . '/src/class-config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78b1922b8102c4b4d425a5476ce4478e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78b1922b8102c4b4d425a5476ce4478e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78b1922b8102c4b4d425a5476ce4478e::$classMap;

        }, null, ClassLoader::class);
    }
}