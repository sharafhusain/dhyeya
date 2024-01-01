<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class DownloadableContent extends Model
{
    use HasFactory;
    protected $table = "downloadable_content";
    protected $guarded = ["id"];
}
