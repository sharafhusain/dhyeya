<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Post;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $notifications = Notification::orderBy("id", "desc")->paginate();
        return view('notification.index', compact("notifications"));
    }

    public function add(Post $post){
        $notification = new Notification();
        $post->notification()->save($notification);
        return ["msg"=>"Record has been added to notifications."];
    }

    public function remove(Post $post){
        $post->notification()->delete();
        return ["msg"=>"Record has been removed from notifications."];
    }
}
