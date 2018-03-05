<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    /* ta zmienna pozwoli nam dodawac wszystko bez wyjatku 
    dla wszystkich przyszłych modeli dziedziczacych po tej klasie*/
    protected $guarded = []; 

}
