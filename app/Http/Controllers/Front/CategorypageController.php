<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategorypageController extends Controller
{
    public function get_exam_primary_cat($locale, Category $category = null)
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '"> ' . __("homepage.student_zone") . '</a> > </span>' . __("homepage.exam");
        if ($category == null) {
            $cats = Category::where("category_type", "exam")
                ->where("category_id", null)
                ->get();
            return view('front.student-zone.layouts.exam_category', compact("cats", 'title_front'));
        }
        return view('front.student-zone.layouts.exam_category', compact("category", 'title_front'));
    }

    public function get_download_primary_cat($locale, Category $category = null)
    {
        $title_front = "Download Section";
        if ($category == null) {
            $cats = Category::where("category_type", "download")
                ->where("category_id", null)
                ->get();
            return view('front.student-zone.layouts.download_all_cat', compact("cats", "title_front"));
        }
        return view('front.student-zone.layouts.download_all_cat', compact("category", "title_front"));
    }

    public function class_notes()
    {
        $title_front = __('nav.class_notes');
        $parent_categroy = Category::firstWhere("category_slug", "like", '%Class-Notes%');
        return view('front.download-detail', compact("parent_categroy", 'title_front'));
    }

    public function ncert_books()
    {
        $title_front = __('nav.ncert_books');
        $parent_categroy = Category::firstWhere("category_slug", "like", '%NCERT-Books%');
        return view('front.download-detail', compact("parent_categroy", 'title_front'));

    }

    public function magazine($locale, $category)
    {
        $parent_categroy = Category::where("category_slug", "like", $category)->first();
        if ($parent_categroy == null)
            abort(404);
        $posts = $parent_categroy?->post()->paginate();
        return view('front.download-pages', compact("parent_categroy", 'posts'));
    }

    public function papers($locale, $subcategory = "papers")
    {
        $parent_categroy = Category::where("category_slug", 'papers')->where("level", 1)->first();
        $categories = $parent_categroy->children;
        if ($subcategory != "papers") {
            $subcategory = $parent_categroy->children()->where("level", 2)->where("category_slug", $subcategory)->first();
            $title_front = $subcategory->category_name;
            $posts = $subcategory?->post()->paginate();
        } else {
            $title_front = __('nav.papers');
            $posts = $parent_categroy->children()->where("level", 2)->where("category_slug", "papers")->first()?->post()->paginate();
        }
        return view('front.download-pages', compact("parent_categroy", 'posts', 'title_front',"categories"));
    }

    public function category_page($locale, Category $category)
    {
        $title_front = "Download Section";
        return view('front.student-zone.layouts.download_one_cat', compact("category", "title_front"));
    }
}
