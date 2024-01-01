<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class seedAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run all available commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('seedpages');
        Artisan::call('seeddownloadprimecats');
        Artisan::call('seedfaculty');
        Artisan::call('seedcourse');
        Artisan::call('seedbatch');
        Artisan::call('seedtest');
        Artisan::call('seed-daily-news-categorys');
        echo "\n...All Seeder has been Seeded Successfully...\n";
    }
}
