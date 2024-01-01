<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['name'];
    protected $fillable = ['subject_type'];


    public function team(){
        return $this->belongsToMany(Team::class);
    }
}
/* if i use dry
this site will make my mind fry
and make me cry but any how i will try */

