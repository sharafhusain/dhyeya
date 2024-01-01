<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Center;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Center::all();
        $title_front = __('nav.contacts');
        return view('front.contacts.contact', compact('contacts', 'title_front'));
    }

    public function store(){
        return redirect()->back()->with('status', 'abhi ye form complete nhi huwa h...');
    }

    public function career(){
        $title_front = __('nav.career');
        $vacancies = Vacancy::where('job_category' ,'dhyeya')->orderBy('created_at', 'desc')->get();
        return view('front.contacts.career', compact('title_front', 'vacancies'));
    }

    public function dizvik(){
        $title_front = __('nav.join_dizvik_technologies');
        $vacancies = Vacancy::where('job_category' ,'dizvik')->orderBy('created_at', 'desc')->get();
        return view('front.contacts.dizvik', compact('title_front', 'vacancies'));
    }

}
