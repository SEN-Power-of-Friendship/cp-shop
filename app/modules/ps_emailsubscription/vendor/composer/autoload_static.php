<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c7c1ea5f408c9bc037c5d25dae98824
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Ps_Emailsubscription' => __DIR__ . '/../..' . '/ps_emailsubscription.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7c7c1ea5f408c9bc037c5d25dae98824::$classMap;

        }, null, ClassLoader::class);
    }
}
