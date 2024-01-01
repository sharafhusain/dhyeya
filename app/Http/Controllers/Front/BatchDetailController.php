<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use Illuminate\Http\Request;

class BatchDetailController extends Controller
{
    public function index(){
        $batches = BatchDetail::paginate(9);
        return view('front.batch', compact('batches'));
    }
}
