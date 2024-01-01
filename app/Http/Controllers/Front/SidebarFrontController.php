<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BatchDetail;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Post;
use Illuminate\Http\Request;

class SidebarFrontController extends Controller
{
    static function latestArticles(){
         $recentArticles = Notification::limit(10)->orderBy('created_at', 'desc')->get();
        return $recentArticles;
    }
}
