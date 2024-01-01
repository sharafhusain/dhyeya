<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;

class CentersController extends Controller
{
    public function index(){
        $center_typess = Center::all()->groupBy('center_type');
        return view('front.center', compact('center_typess'));
    }
    public function indexf2f(){
        $center_typess["Face To Face"] = Center::all()->groupBy('center_type')["Face To Face"];
        dd($center_typess);
        return view('front.center', compact('center_typess'));
    }
    public function indexLivestreaming(){
        $center_typess["Live Stream"] = Center::all()->groupBy('center_type')["Live Stream"];
        return view('front.center', compact('center_typess'));
    }
}
