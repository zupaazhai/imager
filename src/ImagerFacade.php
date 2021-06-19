<?php

namespace Zupaazhai\Imager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zupaazhai\Imager\Imager
 */
class ImagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'imager';
    }
}
