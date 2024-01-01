<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['objective', 'analysis','test_structure'];
}
