<?php

namespace App\Helpers\Zarin;

use Illuminate\Support\Facades\Facade;

class Zarin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zarin';
    }
}
