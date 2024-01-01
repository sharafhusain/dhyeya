<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\PostQna;
use App\Models\PostAttachment;
use App\Models\Test;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function index($locale, $type = "",Post $post,PostAttachment $attachment = null)
    {

//        $post = Post::where("post_type", $type)->first();
//        dd($post);
        switch ($type) {
            case $type == "daily-current-affairs" && $post:
            case $type == "Info-paedia" && $post:
            case $type == "brain-booster" && $post:
                return view('front.current-affairs.layouts.type_post', compact('type', 'post'));
            case $type == "air-debate" && $post:
                $attachment = PostAttachment::findOrFail($attachment);
                return view("front.current-affairs.layouts.air-debate", compact('type', 'post', 'attachment'));

            case $type == "exam" && $post:
                $exam = $post;
                $post_links = $exam->links()->where("type", "post")->get();
                $category_ids = $exam->links()->where("type", "category")->get()->pluck("post_id")->toArray();
                $category_links = Category::whereIn("id", $category_ids)->get();
                return view("front.current-affairs.layouts.exam-post", compact('type', "exam", "post_links", "category_links"));

            case $type == "daily-static-mcqs" && $post:
            case $type == "daily-mcqs" && $post:
                $head = Post::where('post_type', $type)->get();
                $attachment = PostQna::where("post_id", $post->id)->get();
                return view('front.current-affairs.layouts.mcq_layout', compact('type', 'post', 'attachment', 'head'));

            default:
                abort(404);
        }
    }
    public function air_debate_attachment($locale,PostAttachment $attachment)
    {
        $type = "air-debate";
        $post = Post::where('post_type', "air-debate")->first();
        return view("front.current-affairs.layouts.air-debate", compact('type', 'post', 'attachment'));
    }

}
