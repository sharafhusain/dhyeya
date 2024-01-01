<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\DownloadableContent;


class saveContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:save-content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $contents = DownloadableContent::query()->where("is_saved",0)->get();
        foreach ($contents as $content) {
            try {
            $file = file_get_contents($content->url);
            $fileName = explode("/",$content->url);
            $fileName = $fileName[sizeof($fileName)-1]; /*geting the last list item*/
            $savingPath = (str_replace("storage","public",$content->save_path));
            Storage::disk('local')->put($savingPath . $fileName, $file );
            $content->is_saved = 1;
            $content->save();
            dump("Saved:".$savingPath .$fileName);
            }catch (\Exception $e){
                dump($e);
            }
        }
    }
}
