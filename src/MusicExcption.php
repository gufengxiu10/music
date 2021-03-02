<?php

declare(strict_types=1);

namespace Anng\Music;

use Exception;
use ReflectionClass;
use ReflectionException;

class MusicExcption extends Exception
{
    public function __construct(string $message, int $code = 0)
    {
        parent::__construct($message, $code);
    }
}
