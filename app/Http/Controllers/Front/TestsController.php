<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Support\Facades\Route;

class TestsController extends Controller
{
    /*public function index()
    {
        $tests = Test::whereRelation("post", "status", "active")->orderBy("id", "desc")->get()->groupBy("test_type");
//        return view('front.test.index', compact("tests"));
        $route = Route::currentRouteName();
//        dd($route);
        if ($route = "front-tests") {
        return view('front.test.includes.test-category-archive', compact("tests"));
        } else{
            return view('front.test.includes.test-archive-details', compact("tests"));
        }
    }*/

    public function archive($locale)
    {
        $tests = Test::whereRelation("post", "status", "active")->orderBy("id", "desc")->get()->groupBy("test_type");
        return view('front.test.includes.test-category-archive', compact("tests"));

    }
    public function cat_type($locale,$cats_type = null)
    {
        $tests = Test::whereRelation("post", "status", "active")->where("test_type", "like", "%" . $cats_type . "%")->orderBy("id", "desc")->get()->groupBy("test_type");
        return view('front.test.includes.test-category-archive', compact("tests"));
    }

    public function listing($locale, $group_search_string)
    {
        $tests = Test::whereRelation('post', 'status', 'active')->where("test_type", "like", "%" . $group_search_string . "%")->orderBy('id', 'desc')->get();
        return view('front.test.includes.test-archive-details', compact("tests"));
    }


    public function single_show($locale, Post $post)
    {
        $test = $post->test;
        $type = "Test";
        return view('front.post.types.test', compact('test', "type"));
    }
}
