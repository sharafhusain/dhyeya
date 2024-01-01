<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Course;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    function index($locale ,Page $page)
    {
        return view("front.page",compact('page'));
    }

    function single_course($locale, Post $post)
    {
        $course = $post->course;
        $type = str_contains($course->course_type,"Pen Drive")?"Pen Drive Course":'course';
        $features = $course->post->metas->where('type','feature');
        $faqs = $course->post->metas->where('type','faq');
        return view('front.post.types.course', compact('type','course', 'features', "faqs"));
    }
}
