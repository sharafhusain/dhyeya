<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Achiever;
use App\Models\BatchDetail;
use App\Models\Category;
use App\Models\Center;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Test;
use Illuminate\Http\Request;

class _HomeController extends Controller
{
    public function landing_page()
    {
        $slider = Slider::all();
        $latestYear = Achiever::where("type", "achiever")->orderBy("year", "desc")->pluck("year")->first();
        $achievers = Achiever::where("type", "achiever")->where("year", $latestYear)->orderBy("id", "desc")->limit(10)->get();
        $testNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type == "test";
        })->take(6);
        $examNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type == "exam";
        })->take(6);
        $otherNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type != "test" && $n->post->post_type != "exam";
        })->take(6);
        $toppers = Achiever::where("type", "topper")->orderBy("id", "desc")->limit(10)->get();
        $blogs = Post::where("post_type", "post")->orderBy("id", "desc")->limit(4)->get();
        return view('front.landing-page', compact(
            'achievers',
            'testNotification',
            'examNotification',
            'otherNotification',
            'toppers',
            'blogs',
            'slider',
        ));
    }

    public function index()
    {
        $slider = Slider::all();
        $latestYear = Achiever::where("type", "achiever")->orderBy("year", "desc")->pluck("year")->first();
        $achievers = Achiever::where("type", "achiever")->where("year", $latestYear)->orderBy("id", "desc")->limit(10)->get();
        $toppers = Achiever::where("type", "topper")->orderBy("id", "desc")->limit(10)->get();
        $blogs = Post::where("post_type", "post")->orderBy("id", "desc")->limit(4)->get();
        $teams = Team::limit(10)->get();
        $centers = Center::all();
        $testNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type == "test";
        })->take(8);
        /*$examNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type == "exam";
        })->take(8);*/
        $otherNotification = Notification::all()->where(function (Notification $n) {
            return $n->post->post_type != "test" && $n->post->post_type != "exam";
        })->take(8);
        $allNotification = Notification::orderBy('created_at', 'desc')->get()->take(6);
//        dd($allNotification->toArray());
        $cats = Category::where("category_type", "exam")->where("category_id", null)->orderBy('created_at', 'desc')->get()->take(6);
        $tests_first = Test::whereRelation('post', 'status', 'active')->orderBy('id', 'desc')
            ->where('test_type', 'EPFO Mains EO/AO')
            ->orWhere('test_type', 'BPSE Mains')
            ->limit(5)->get();
        $tests_last = Test::whereRelation('post', 'status', 'active')->orderBy('id', 'desc')
            ->whereNotIn('test_type', ['EPFO Mains EO/AO', 'BPSE Mains'])
            ->limit(4)->get();
        $books = Post::where("post_type", "book_section")->first()->attachments()
            ->orderBy('id', 'desc')->take(4)->get();
//dd($books);
        return view('front.home.index', compact(
            "slider",
            "achievers",
            "toppers",
            "blogs",
            "teams",
            "centers",
            "testNotification",
//            "examNotification",
            "otherNotification",
            "allNotification",
            "tests_first",
            "tests_last",
            'books',
            'cats',
        ));
    }
}
