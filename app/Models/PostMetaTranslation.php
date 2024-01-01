<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMetaTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
