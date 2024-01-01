<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchieverTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'achievement'];
    public $timestamps = false;
}
