<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('front.about.index');
    }

    public function mission(){
        return view('front.about.mission');
    }

    public function aim(){
        return view('front.about.aim');
    }

    public function methodology(){
        return view('front.about.methodology');
    }

    public function why(){
        return view('front.about.why');
    }

    public function gallery(){
        $title_front = __("homepage.gallery");
        $gallery = Gallery::all();
//        dd($gallery);
        return view('front.gallery', compact('title_front', 'gallery'));
    }
}
