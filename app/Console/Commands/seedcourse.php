<?php

namespace App\Console\Commands;

use App\Models\Achiever;
use App\Models\Course;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class seedcourse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedcourse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Course data seeder';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $courses = include "course_seeder_details.php";
        foreach ($courses as $course) {
            $course["slug"] = Str::slug($course['en']['title']);
            $course["hi"] = $course['en'];
            $course["user_id"] = 1;
//            $course["duration"] = 6;
            $course["post_type"] = "course";
            $course["status"] = "active";
            $post = Post::create($course);
            $course_instence = new Course();
            $course_instence->fill($course);
            $post->course()->save($course_instence);
        }
            echo "\nCourse has been seeded ...";
    }
}
