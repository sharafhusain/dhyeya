<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatedAttributes = ['title'];
    protected $fillable = ["status",'slug',"filename"];


    public function seofield(): Morphone
    {
        return $this->morphone(Seofield::class, 'objectable');
    }

    public function menu(){
        return $this->morphOne(Menu::class, 'objectable');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
