<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function udaan() {
        $title_front = __('homepage.dhyeya_ias_udaan');
        return view('front.templates.static.dhyeya-ias-udaan', compact('title_front'));
    }

    public function dlp() {
        $title_front = __('homepage.distance_learning');
        return view('front.templates.dlp.index', compact('title_front'));
    }

    public function upsc() {
        $title_front = __('nav.dlp_for_upsc');
        return view('front.templates.static.dlp_for_upsc', compact('title_front'));
    }

    public function uppcs() {
        $title_front = __('nav.dlp_for_uppcs');
        return view('front.templates.static.dlp_for_uppcs', compact('title_front'));
    }

    public function bpsc() {
        $title_front = __('nav.dlp_for_bpsc');
        return view('front.templates.static.dlp_for_bpsc', compact('title_front'));
    }
}
