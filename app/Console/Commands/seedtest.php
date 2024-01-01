<?php

namespace App\Console\Commands;

use App\Models\Achiever;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class seedtest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedtest';

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
        $tests = include "test_seeder_details.php";
        foreach ($tests as $test) {
            $test["slug"] = Str::slug($test['en']['title']);
            $test["hi"] = $test['en'];
            $test["user_id"] = 1;
            $test["post_type"] = "test";
            $test["status"] = "active";
            $post = Post::create($test);
            $test_instence = new Test();
            $test_instence->fill($test);
            $post->test()->save($test_instence);
        }
        echo "\nTest has been Seeded ...";
    }
}
