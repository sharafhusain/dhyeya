<?php

namespace App\Console\Commands;

use App\Models\Subject;
use App\Models\Team;
use Illuminate\Console\Command;
use App\Http\Controllers\HasImageUploading;

class seedfaculty extends Command
{
    use HasImageUploading;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedfaculty';

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
        $teams_and_subject = [
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Kaish Alam', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'R. K. Verma', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Anshuman Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Kanhaiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Raj Kumar Yadav', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Siddharth Deshwal', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shashwat Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Arun Tripathi', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Kumud Ranjan', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Ritesh Upadhyay', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shashidhar Mishra', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Subodh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Anadi Upadhyay', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Subodh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Other Experts From IIPA & DU', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Raj Kumar Yadav', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sweta Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Peeyush Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Q. H. Khan', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Raghvendra Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sajid Ali', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Archana Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh Parihar', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Rajesh Bhadauria', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh Parihar', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Siddharth Deshwal', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shashwat Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Dhyeya Team', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Current Affairs",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Athar Abbasi', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Javed Ahmed', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Kanahiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Mukesh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Prof. Usmani', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sweta Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'R. K. Verma', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Rajesh Bhadauria', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Political Science & IR",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Political Science & IR",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Sociology",
                "subject_type" => "Optional Subject"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg',
                'en' => ["name" => 'Kanhaiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Hindi Literature",
                "subject_type" => "Optional Subject"
            ],
        ];
        $previously_created_subject = null;

        foreach ($teams_and_subject as $st) {

            $created_team = Team::whereTranslationLike("name", "%" . $st["en"]["name"] . "%")->get()->first();
            #creating team mamber
            if (!$created_team) {
                $created_team = Team::create([
                    'image' => $this->uploadImageSeeder('database/seeders/temp_imgs_for_seeding/team/userplaceholder.jpeg', "userplaceholder.jpeg"),
                    'en' => ["name" => $st["en"]["name"], "description" => $st["en"]["description"] ?? "", "position" => $st["en"]["position"]],
                    'hi' => ["name" => $st["en"]["name"], "description" => $st["en"]["description"] ?? "", "position" => $st["en"]["position"]],
                ]);
            }
//            dd($created_team);
            #create subject if it is not created yet


//            run only when subject is not being already created.
            if ($previously_created_subject != $st["subject"]) {
                $previously_created_subject = $st["subject"];
                $subject = Subject::create([
                    "en" => [
                        "name" => $st["subject"]
                    ],"hi" => [
                        "name" => $st["subject"]
                    ],
                    "subject_type" => $st["subject_type"]
                ]);
            }

            #attaching subjects to perticuler teacher
            $subject->team()->attach($created_team->id);

            #attaching team member to perticuler team category
            $created_team->teamCategories()->attach($st["team_category_title"]);
        }
            echo "\nFaculty has been Seeded ...";
    }
}
