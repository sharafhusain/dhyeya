<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class paper_subcategory extends Command
{

    protected $signature = 'app:paper_subcategory';
    protected $description = ' this command is being called from seeddownloadprimecats to create categories at once ';

    public function handle()
    {
        $papers_id = Category::where("category_slug", "papers")->first()->id;
        $category = [[
            "category_type" => "download",
            "level" => 2,
            "category_id" => $papers_id,
            "category_slug" => "upsc-pre",
            "en" => ["category_name" => "UPSC-PRE papers",
            ],
        ], [
            "category_type" => "download",
            "level" => 2,
            "category_id" => $papers_id,
            "category_slug" => "upsc-main",
            "en" => ["category_name" => "UPSC-MAIN papers",
            ],
        ], [
            "category_type" => "download",
            "level" => 2,
            "category_id" => $papers_id,
            "category_slug" => "uppsc",
            "en" => ["category_name" => "UPPSC papers",
            ],
        ], [
            "category_type" => "download",
            "level" => 2,
            "category_id" => $papers_id,
            "category_slug" => "BPSC",
            "en" => ["category_name" => "BPSC papers",
            ],
        ],[
            "category_type" => "download",
            "level" => 2,
            "category_id" => $papers_id,
            "category_slug" => "MPPSC",
            "en" => ["category_name" => "MPPSC papers",
            ],
        ],
        ];
        foreach ($category as $cat) {
            Category::create($cat);
        }
        echo "\nPapers sub Category Seeded ...";
    }
}


