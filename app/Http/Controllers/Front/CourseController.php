<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('front.course.index');
    }
    public function courseList(){
        $pendriveOrOnline = str_contains(request()->route()->uri,"online")?"Online":"Pen Drive";
        $courses = Course::where('course_type', 'LIKE',"%".$pendriveOrOnline."%")->get()->groupBy("course_type");
        return view('front.course.online-and-pendrive-archive', compact('courses'));
    }
}
