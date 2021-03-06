<?php

declare(strict_types=1);

namespace Anng\Music;

abstract class Facade
{
    abstract static protected function getClass();

    public static function __callStatic($method, $args)
    {
        return call_user_func_array([new (static::getClass()), $method], $args);
    }
}
