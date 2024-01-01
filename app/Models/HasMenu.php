<?php

namespace App\Models;


trait HasMenu
{
    public function menu(){
        return $this->morphOne(Menu::class, 'objectable');
    }
}
