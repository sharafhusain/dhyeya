<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Seofield extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['excerpt'];
    protected $guarded = ["id"];

    public function objectable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'objectable_type', 'objectable_id');
    }
}
