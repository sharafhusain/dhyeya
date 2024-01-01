<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostQna;
use App\Models\PostAttachment;
use Illuminate\Http\Request;

class AffairController extends Controller
{
    public function current_affairs($locale, $type = "current-affairs")
    {
        $head = Post::firstWhere("post_type", $type);
        if(!$head){ //if head is null
            abort(404,"Head not found");
        }
        switch ($type) {
            case "daily-current-affairs":
            case "daily-news-analysis":
            case "Info-paedia":
            case "brain-booster":
                $categories = Category::query()->where("category_type", "DNA")->get();
                $posts = Post::where("post_type", "child-of-" . $type)->orderBy("created_at", "desc")->paginate(12);
                return view('front.affair', compact('type', 'head', 'posts', "categories"));
            case "air-debate":
            case "daily-pre-pare":
                $attachments = $head->attachments()->with("meta")->orderBy("created_at", "desc")->paginate(20);
                return view('front.affair', compact('type', 'head', 'attachments'));
            case "daily-static-mcqs":
            case "daily-mcqs":
                $attachments = Post::where("post_type", "child-of-" . $type)->orderBy("created_at", "desc")->paginate(12);
//                Attachment is just a name these are Sub-posts
                return view('front.affair', compact('type', 'head', 'attachments'));
            case "current-affairs":
//                $attachments = Post::where("post_type", "child-of-" . $type)->paginate(12);
                return view('front.affair', compact('type', 'head'));
            default:
                abort(404);
        }
    }

    public function daily_static_mcqs()
    {
        $head = Post::where('post_type', "daily-static-mcqs")->first();
        $attachments = Post::where("post_type", "child-of-daily-static-mcqs")->orderBy("created_at", "desc")->paginate(12);
        $type = "daily-static-mcqs";
//                Attachment is just a name these are Sub-posts
        return view('front.affair', compact('type', 'head', 'attachments')  );
    }

    public function daily_news_analisis_sub_category($locale, Category $category)
    {
        $head = Post::firstWhere("post_type", "daily-current-affairs");
        $type = "daily-current-affairs";
        $posts = $category->post()->orderBy("created_at", "desc")->paginate(12);
        $categories = Category::query()->where("category_type", "DNA")->get();
        return view('front.affair', compact('head', 'posts', "type", "categories"));
    }
}

