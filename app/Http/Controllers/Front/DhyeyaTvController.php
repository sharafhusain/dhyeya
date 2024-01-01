<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DhyeyaTvController extends Controller
{
    public function index(){
        return view('front.youtube');
    }
}
