<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class seeddownloadprimecats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seeddownloadprimecats';

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
        $category = [[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "NCERT-Books",
    "en"=>["category_name" => "NCERT BOOKS",
    "description" => "(Download) NCERT Books for UPSC IAS Civil Services (Preliminary and Mains), State PSC Examinations",
    "image" => "IXeBWRroFibdHoD6AAgxsfQPQuC3u0DG2dHk3x4T.jpg"],
  ],[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "magazine",
    "en"=>["category_name" => "Magazine"],
  ],[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "papers",
    "en"=>["category_name" => "Papers"],
  ],[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "syllabus",
    "en"=>["category_name" => "Exam Syllabus"],
  ],[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "upsc-toppers-answer-copies",
    "en"=>["category_name" => "UPSC Toppers Answer Copies"],
  ],[
    "category_type" => "download",
    "level" => 1,
    "category_slug" => "Class-Notes",
    "en"=>["category_name" => "Class Notes PDF",
    "description" => "(डाउनलोड) यूपीएससी, स्टेट पीएससी/पीसीएस परीक्षाओं के लिए ध्येय IAS आधिकारिक क्लास नोट्स (Download Dhyeya IAS Official Class Notes PDF in Hindi for UPSC and All "],
  ]
];

        foreach ($category as $cat){
            Category::create($cat);
        }
            echo "\nDownload Category Seeded ...";
        \Artisan::call("app:paper_subcategory");
    }
}
