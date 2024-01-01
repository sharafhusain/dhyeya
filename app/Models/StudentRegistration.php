<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'course_name', 'course_medium', 'course_mode', 'address'];

    public function post(){
        $this->belongsTo(Post::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

}


