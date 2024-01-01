<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatedAttributes = ['name'];
    public function objectable(){
        return $this->morphTo();
    }

    public function menuLocation(){
        return $this->belongsToMany(MenuLocation::class);
    }
}
