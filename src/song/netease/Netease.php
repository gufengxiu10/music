<?php

declare(strict_types=1);

namespace Anng\Music\Song\Netease;

use Anng\Music\Music;


class Netease extends Music
{
    public function getNamespace()
    {
        return '\\app\\api\\music\\song\\netease\\module\\';
    }
}
