<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = ['medium', 'mode', 'course_type', 'total_fee', 'installment_duration',"duration", 'one_time_payment'];
    public $translatedAttributes = ['exam_name','course_information', 'admission_process', 'technical_requirement'];
    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function installments(){
        return $this->hasMany(CourseInstallment::class, 'course_id');
    }

    public function registration(){
        return $this->hasMany(StudentRegistration::class);
    }
}
