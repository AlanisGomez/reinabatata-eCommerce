<?php

namespace Webkul\ReinaBatata\Facades;

use Illuminate\Support\Facades\Facade;

class ReinaBatata extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'reinabatata';
    }
}