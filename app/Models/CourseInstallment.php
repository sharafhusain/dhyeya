<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstallment extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title'];
    protected $fillable = ['amount'];
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
