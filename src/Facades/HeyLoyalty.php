<?php
namespace Hughwilly\HeyLoyalty\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * HeyLoyalty API Client Facade.
 *
 * @package Hughwilly\HeyLoyalty\Facades
 */
class HeyLoyalty extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'heyloyalty';
    }
}
