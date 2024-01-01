<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAttachmentMTranslation extends Model
{
    use HasFactory;
    public $table = "post_attachment_m_translations";
    public $timestamps = false;
    protected $fillable = ['key',"val"];
}
