<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuLocation extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }

}
