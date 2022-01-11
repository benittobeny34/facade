<?php


namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class Person extends Facade
{

    public static function getFacadeAccessor()
    {
        return PersonDetail::class;
    }
}
