<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchDetail extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatedAttributes = ['title', 'image'];
    protected $fillable = ["medium", 'date', 'time', 'center_id',"status"];

    protected $casts = ["date"=>"datetime","time"=>"datetime"];

    public function center(){
        return $this->belongsto(Center::class);
    }
}
