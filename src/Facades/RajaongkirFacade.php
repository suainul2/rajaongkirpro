<?php

namespace Suainul\Rajaongkir\Facades;

use Illuminate\Support\Facades\Facade;

class RajaongkirFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rajaongkir';
    }
}