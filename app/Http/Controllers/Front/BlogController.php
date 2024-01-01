<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Post::where("status","active")->where("post_type","post")->paginate(12);
        return view('front.blog', compact('blogs'));
    }
}
