<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppersController extends Controller
{
    public function index(){
        return view('toppers.index');
    }
}
