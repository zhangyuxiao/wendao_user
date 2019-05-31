<?php
namespace Winndoo\User;

use Illuminate\Support\Facades\Facade;

class WdUser extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'wdUser';
    }
}