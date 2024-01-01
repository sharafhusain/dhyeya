<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAttachment extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title', 'filename',];
    protected $fillable = [ 'type',"slug"];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function meta(){
        return $this->hasOne(PostAttachmentM::class);
    }
}
