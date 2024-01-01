<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class seedDailyNewsCategorys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed-daily-news-categorys';

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
    "category_type" => "DNA",
    "level" => 1,
    "category_slug" => "economy-geography-and-disaster",
    "en"=>["category_name" => "Economy, Geography & Disaster Articles",
    "description" => "Economy, Geography & Disaster Articles for UPSC/State PSC Exams",
    ],
  ],[
    "category_type" => "DNA",
    "level" => 1,
    "category_slug" => "IR-and-internal-security",
    "en"=>["category_name" => "IR & Internal Security Articles"],
    "description" => "International Relations (IR), & Internal Security Articles for UPSC/State PSC Exams",
  ],[
    "category_type" => "DNA",
    "level" => 1,
    "category_slug" => "science-tech-environment",
    "en"=>["category_name" => "Science & Technology and Environment Articles"],
    "description" => "Science & Technology and Environment Articles for UPSC/State PSC Exams",
  ],[
    "category_type" => "DNA",
    "level" => 1,
    "category_slug" => "polity-governance-and-society",
    "en"=>["category_name" => "Polity, Governance & Society Articles"],
    "description" => "Polity, Governance & Society Articles for UPSC/State PSC Exams",
  ]
];

        foreach ($category as $cat){
            Category::create($cat);
        }
            echo "\nDownload Category Seeded ...";
    }
}
