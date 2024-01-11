<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbad159aaf40a09e07a8741a19113aedc
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

        spl_autoload_register(array('ComposerAutoloaderInitbad159aaf40a09e07a8741a19113aedc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbad159aaf40a09e07a8741a19113aedc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbad159aaf40a09e07a8741a19113aedc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
