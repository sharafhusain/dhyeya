<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = ['type'];
    public $translatedAttributes = ['title', 'description'];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
