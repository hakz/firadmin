<?php namespace Firalabs\Firadmin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Facade for permissions
 * 
 * @author maxime.beaudoin
 */
class Permissions extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor(){ return 'permissions'; }

}