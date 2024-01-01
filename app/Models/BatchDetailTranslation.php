<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchDetailTranslation extends Model
{
    use HasFactory;
    protected $fillable = ["title",'image'];
    public $timestamps = false;

}
