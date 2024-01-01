<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPaper extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['test_name'];
    protected $fillable = ['filename', 'date'];


    public function test(){
        return $this->belongsTo(Test::class);
    }

    public function schedules(){
        return $this->hasMany(TestSchedule::class);
    }
}
