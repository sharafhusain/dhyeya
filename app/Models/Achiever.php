<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achiever extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatedAttributes = ['name', 'achievement'];
    protected $fillable = ['image', 'year', 'group',"type"];
}
