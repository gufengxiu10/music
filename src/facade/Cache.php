<?php

declare(strict_types=1);

namespace Anng\Music\Facade;

use Anng\Music\Cache as MusicCache;
use Anng\Music\Facade;

class Cache extends Facade
{
    protected static function getClass()
    {
        return MusicCache::class;
    }
}
