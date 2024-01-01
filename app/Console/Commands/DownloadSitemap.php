<?php

namespace App\Console\Commands;

use vipnytt\SitemapParser;
use vipnytt\SitemapParser\Exceptions\SitemapParserException;
use App\Models\Url;

use Illuminate\Console\Command;

class DownloadSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-sitemap';

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
        try {
            $parser = new SitemapParser();
            $parser->parse('https://www.dhyeyaias.com/sitemap.xml?page=2');
            $urls = [];

            foreach ($parser->getURLs() as $url => $tags) {
                // echo $url . '<br>';
                $urls[] = ['old_url' => $url,];
                if (count($urls)>=100){
                Url::insert($urls);
                $urls = [];
                }

            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
