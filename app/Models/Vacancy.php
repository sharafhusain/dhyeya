<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    use HasMenu;
    use Translatable;
    public $translatedAttributes = ['title', 'location', 'skill_qualification', 'role_description'];
    protected $fillable = ['job_type', 'salary', 'no_of_openings', 'job_category', 'how_to_apply'];
}
