<?php

namespace App\Console\Commands;

use App\Models\Achiever;
use App\Models\BatchDetail;
use App\Models\Center;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class seedbatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedbatch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */


    public function uploadImageSeeder($file, $fileName)
    {
        $file = file_get_contents($file);
        Storage::disk('local')->put("public/media/" . $fileName, $file);
        return $fileName;
    }


    public function handle()
    {
        $batchs = include "batch_seeder_details.php";

        foreach ($batchs as $batch) {
            //Getting the file name from a long sting
            $file_destination_as_array = explode("/", $batch["en"]["image"]);
            $arrayCount = count($file_destination_as_array) - 1;
            $fileName = $file_destination_as_array[$arrayCount];

            $batch["en"]["image"] = $this->uploadImageSeeder($batch["en"]["image"],$fileName);
            $batch["hi"] = $batch['en'];
            $batch["status"] = "active";
            $batch["center_id"] = Center::whereTranslationLike("title","%".$batch["center_name_to_search"]."%")->get()->first()->id;
            $batch_instence = new BatchDetail();
            $batch_instence->fill($batch)->save();
        }
            echo "\nBatch has been Seeded ...";
    }
}
