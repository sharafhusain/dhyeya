<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Achiever;
use Illuminate\Http\Request;

class AchieverController extends Controller
{
    public function index(){
        $achievers = Achiever::where("type","achiever")->get()->groupBy("year")->map(function ($data){return $data->groupBy("group");});
        return view('front.achiever', compact("achievers"));
    }
}
