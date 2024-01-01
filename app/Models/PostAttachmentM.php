<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAttachmentM extends Model
{
    use HasFactory;
    use Translatable;
    public $table = "post_attachment_ms";
    protected $translatedAttributes = ['key','val'];
    protected $guarded = ["id"];


    public function attachment(){
        return $this->belongsTo(PostAttachment::class);
    }
}
