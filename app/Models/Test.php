<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['objective', 'analysis','test_structure'];
    protected $fillable = ['starting_date', 'total_no_of_test', 'medium', 'mode','test_type',"result_published"];
    public function papers(){
        return $this->hasMany(TestPaper::class);
    }

    public function feeDetails(){
        return $this->hasMany(FeeDetail::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
