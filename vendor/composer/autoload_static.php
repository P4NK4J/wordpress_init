<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35d3e0f7561c2131827b1e26a52495d8
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'FancyGuy\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/fancyguy/webroot-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit35d3e0f7561c2131827b1e26a52495d8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
