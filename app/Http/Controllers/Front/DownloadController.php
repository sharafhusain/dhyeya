<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostAttachment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $download_primary_category = Category::where("category_type", "download")->where("level", 1)->get();
        return view('front.download', compact("download_primary_category"));
    }

    public function downloadDetail($locale, Category $parent_categroy)
    {
        $title_front = $parent_categroy?->category_name;
        return view('front.download-detail', compact("parent_categroy", 'title_front'));
    }

    public function blog($locale, Post $post)
    {
        $type = "Downloads";
        return view('front.current-affairs.layouts.type_post', compact("post", "type"));
    }

    public function donload_section_single_page($locale,$category ,Post $post)
    {
        $type = Category::firstWhere("category_slug",$category)->category_name;
        return view('front.current-affairs.layouts.type_post', compact("post", "type"));
    }
    public function paper_section_single_page($locale,$category ,Post $post)
    {
        $type = Category::firstWhere("category_slug","like","papers")->category_name;
        return view('front.current-affairs.layouts.type_post', compact("post", "type"));
    }
    public function pages_sub_archive($locale,Category $category ,Post $post)
    {
        $type = $category->category_name;
        return view('front.current-affairs.layouts.type_post', compact("post", "type"));
    }
    public function magazine_section_single_page($locale,$category ,Post $post)
    {
        $type = Category::firstWhere("category_slug",$category)->category_name;
        return view('front.current-affairs.layouts.type_post', compact("post", "type"));
    }

    public function download($locale, PostAttachment $attachment)
    {
        $old_content_date = new Carbon("2023-12-05");
        if (\Auth::check() || $attachment->created_at>$old_content_date) {
            return \Response::download('storage/media/' . $attachment->filename, $attachment->title);
        }
        return redirect()->route("login-guest");
    }
}
