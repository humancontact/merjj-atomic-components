<?php

namespace Humancontact\MerjjAtomicComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Humancontact\MerjjAtomicComponents\MerjjAtomicComponents
 */
class MerjjAtomicComponents extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Humancontact\MerjjAtomicComponents\MerjjAtomicComponents::class;
    }
}
