<?php


namespace Kaser\Tinkoff;

use Illuminate\Support\Facades\Facade;

/**
 * Class TinkoffFacade
 * @package Kaser\Tinkoff
 */
class TinkoffFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tinkoff';
    }
}