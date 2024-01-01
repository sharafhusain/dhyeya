<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCategory extends Model
{
    use HasFactory;

    protected $fillable = ['team_category'];

    public function teams() {
        return $this->belongsToMany(Team::class);
    }
}
