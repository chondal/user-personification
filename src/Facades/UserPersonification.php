<?php

namespace Chondal\UserPersonification\Facades;

use Illuminate\Support\Facades\Facade;

class UserPersonification extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'user-personification';
    }
}
