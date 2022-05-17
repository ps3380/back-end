<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c3a72c5fa38ea190b442f09f35aa06e
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3c3a72c5fa38ea190b442f09f35aa06e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3c3a72c5fa38ea190b442f09f35aa06e::$classMap;

        }, null, ClassLoader::class);
    }
}