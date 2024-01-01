<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use HasMenu;
    use Translatable;
    protected $translatedAttributes = ['category_name',"description","image"];
    protected $fillable = ['category_id',"category_type",'category_slug',"level"];
    public function post(){
        return $this->belongsToMany(Post::class);
    }
    function children() {
        return $this->hasMany(Category::class, 'category_id');
    }
    function parent() {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
