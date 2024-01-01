<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mockery\Exception;
use vipnytt\SitemapParser;
use Illuminate\Support\Facades\Http;
use App\Models\Url;

class ProcessSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-sitemap';

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
        $urls = Url::query()->where('processed', '!=', 1)->get();
        foreach ($urls as $url) {
            $old_url = $url->old_url;
            $new_url = str_replace('https://www.dhyeyaias.com', 'http://127.0.0.1:8000/en', $old_url);

            try {
                $response = Http::get($new_url);
                $url->new_url = $new_url;
                $url->processed = 1;
                if ($response->getStatusCode() == 200) {
                    $url->status = 'ok';
                } else {
                    $url->status = 'failed';
                }
                // dd($response->getStatusCode());
                $url->save();

            } catch (\Exception $e) {
                echo $e->getMessage();
                $url->new_url = $new_url;
                $url->status = 'failed';
                $url->processed = 1;
                $url->save();
            }
        }
    }

}
