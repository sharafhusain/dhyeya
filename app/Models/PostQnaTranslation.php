<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostQnaTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =  ['question',"more_info",'option_a','option_b','option_c','option_d','answer','description'];
}
