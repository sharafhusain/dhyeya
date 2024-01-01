<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostQna extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatedAttributes = ['question',"more_info",'option_a','option_b','option_c','option_d','answer','description'];
    protected $guarded = ["id"];


    public function post(){
        return $this->belongsTo(Post::class);
    }
}
