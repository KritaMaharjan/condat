<?php
namespace App\Condat\Facades;

use Illuminate\Support\Facades\Facade;

class General extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'general';
    }
} 