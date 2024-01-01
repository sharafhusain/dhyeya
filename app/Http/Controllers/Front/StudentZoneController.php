<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Center;
use App\Models\Notification;
use App\Models\Page;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentZoneController extends Controller
{
    public function index()
    {
        $title_front = __('homepage.student_zone');
        return view('front.student-zone.index', compact('title_front'));
    }

    public function batch($locale, Request $request, Center $center = null)
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.batch_details');
        $online_batches = BatchDetail::whereRelation("center", "center_type", "Live Stream")->paginate();
        $classroom_programme = Page::where('slug', 'classroom-programme')->first();
        if ($center) {
            return view('front.student-zone.layouts.batch', compact("center", "online_batches", 'title_front'));
        } else {
            $locations = Center::all();
            return view('front.student-zone.layouts.batch', compact("locations",  'online_batches', 'title_front', 'classroom_programme'));
        }
    }

    public function fee()
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.fee_details');
        return view('front.student-zone.layouts.fee', compact('title_front'));
    }

    public function book(){
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.books_and_notes');
        $parent_post = Post::where("post_type","book_section")->first();
        $books = $parent_post->attachments->groupBy("title")->toArray();
//        dd($books);
        return view('front.student-zone.layouts.books-and-notes', compact("books",'title_front'));
    }

    public function faq()
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.upsc_faqs');
        return view('front.student-zone.layouts.upse-and-faqs', compact('title_front'));
    }

    public function brochure()
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.prospectus');
        return view('front.student-zone.layouts.brochure',compact('title_front'));
    }

    public function notification()
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.notifications');
        $notifications = Notification::all()->sortDesc();
//        foreach ($notifications as $notification){
//        dd($notification->post->test->id);
//
//        }

        return view('front.student-zone.layouts.notification', compact('notifications', 'title_front'));
    }

    public function result()
    {
        $title_front = '<span style="color: #000!important;"><a class="text-decoration-none" href="' . route('front-student-zone') . '">'.__('homepage.student_zone').'</a> > </span>'.__('homepage.result');
        $tests = Test::where("result_published", "1")->paginate(5);
        return view('front.student-zone.layouts.result', compact('tests', 'title_front'));
    }

    public function download_result($locale, $testid)
    {
        $test = Test::findOrFail($testid);
        return view('front.post.types.download_testpaper_result', compact("test"));
    }
}
