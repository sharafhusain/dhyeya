<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['name', 'description','position'];
    protected $fillable = ['image'];
    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
    public  function teamCategories() {
        return $this->belongsToMany(TeamCategory::class);
    }
}
