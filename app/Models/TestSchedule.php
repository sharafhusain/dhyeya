<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSchedule extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['subject'];
//    protected $fillable = ['date'];

    public function paper(){
        return $this->belongsTo(TestPaper::class);
    }
}
