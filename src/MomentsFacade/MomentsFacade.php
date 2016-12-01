<?php

namespace Rukhsar\Moments\MomentsFacade;

use Illuminate\Support\Facades\Facade;

class MomentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
     return 'moments';
    }
}