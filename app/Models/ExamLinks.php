<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamLinks extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'post_id','owner_post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class,);
    }
//    public function owner()
//    {
//        return $this->belongsTo(Post::class,);
//    }

}
