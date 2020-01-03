<?php

namespace Ortnit\Config;

class Config
{
    protected string $path;

    public function __construct(string $path = 'config')
    {
        static::defineConstants();

        if (substr($path, 0, 1) != '/') {
            dump(getcwd());
            $path = getcwd() . DS . $path;
        }

        dump($path);
    }

    /**
     * defines a set of constants
     */
    public static function defineConstants()
    {
        if (!defined('DS')) {
            define('DS', DIRECTORY_SEPARATOR);
        }
    }
}
