<?php

declare(strict_types=1);

namespace Anng\Music\Contract;

interface Api
{
    /**
     * @name: 搜索
     * @param {*}
     * @author: ANNG
     * @todo: 
     * @Date: 2021-02-19 09:56:55
     * @return {*}
     */
    public function module(string $searchWord);
}
