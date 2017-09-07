<?php
namespace App\Facades;  

use Illuminate\Support\Facades\Facade;  

class Wprestapi extends Facade 
{
    protected static function getFacadeAccessor() {   return 'Wprestapi';     }
}