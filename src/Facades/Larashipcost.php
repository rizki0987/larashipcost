<?php

namespace ThiccPan\Larashipcost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ThiccPan\Larashipcost\Larashipcost
 */
class Larashipcost extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ThiccPan\Larashipcost\Larashipcost::class;
    }
}
