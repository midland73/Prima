<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd6b331cf2cd5aa2c06dc022a984bd3dc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd6b331cf2cd5aa2c06dc022a984bd3dc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd6b331cf2cd5aa2c06dc022a984bd3dc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd6b331cf2cd5aa2c06dc022a984bd3dc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
