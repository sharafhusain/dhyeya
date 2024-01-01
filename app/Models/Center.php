<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    use HasMenu;
    use Translatable;
    protected $translatedAttributes = ['title', 'address',"city","state"];
    protected $fillable = ['phone_number', 'email', 'image', 'center_type'];

    public function batches(){
        return $this->hasMany(BatchDetail::class);
    }
}
