<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;
    use HasMenu;
    use Translatable;
    protected $translatedAttributes = ['image','title', 'description'];
    protected $fillable = [ 'post_type', 'user_id',"status",'slug'];
    public function attachments(){
        return $this->hasMany(PostAttachment::class);
    }

    public function metas(){
        return $this->hasMany(PostMeta::class);
    }
    public function seofield(): Morphone
    {
        return $this->morphone(Seofield::class, 'objectable');
    }

    public function catagories(){
        return $this->belongsToMany(Category::class);
    }

    public function course(){
        return $this->hasOne(Course::class);
    }

    public function notification(){
        return $this->hasOne(Notification::class);
    }

    public function test(){
        return $this->hasOne(Test::class);
    }
    public function qnas(){
        return $this->hasMany(PostQna::class);
    }

    public function menu(){
        return $this->morphOne(Menu::class, 'objectable');
    }

    public function registration(){
        return $this->hasOne(StudentRegistration::class);
    }

    public function page(){
        return $this->hasOne(Page::class);
    }
    public function links(){
        return $this->hasMany(ExamLinks::class,"owner_post_id");
    }

}
