<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


trait HasImageUploading
{

    protected function uploadImage($file,$location = "public/media/"){
        $fileName   = $file->hashName();
        Storage::disk('local')->put($location . $fileName, $file->getContent()  );
        return $fileName;
    }

    protected function deleteImage($fileName,$location = "public/media/"){
       if (Storage::exists($location.$fileName)){
        Storage::delete($location.$fileName);
       }
    }

//    Temprary use only
    protected function uploadImageSeeder($file,$fileName){
        $file = file_get_contents($file);
        Storage::disk('local')->put("public/media/" . $fileName, $file);
        return $fileName;
    }
}
