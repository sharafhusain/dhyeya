<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TeamFacultySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */

    public function uploadImageSeeder($file, $fileName)
    {
        $file = file_get_contents($file);
        Storage::disk('local')->put("public/media/" . $fileName, $file);
        return $fileName;
    }

    public function run(): void
    {

        $teams_and_subject = [
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Kaish Alam', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'R. K. Verma', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History & Culture",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Anshuman Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Kanhaiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Raj Kumar Yadav', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Siddharth Deshwal', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shashwat Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Economy",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Arun Tripathi', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Kumud Ranjan', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Ritesh Upadhyay', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shashidhar Mishra', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Polity & Governance",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Subodh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "International Relations",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Anadi Upadhyay', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Subodh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Other Experts From IIPA & DU', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ethics, Integrity & Aptitude",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Raj Kumar Yadav', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sweta Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Social Issues & Social Justice",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Peeyush Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Q. H. Khan', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Raghvendra Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sajid Ali', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Science & Technology",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Archana Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh Parihar', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Rajesh Bhadauria', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh Parihar', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Ecology, Environment & Disaster Management",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Siddharth Deshwal', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shashwat Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vinay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Internal Security",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Dhyeya Team', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Current Affairs",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Athar Abbasi', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Javed Ahmed', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Kanahiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Mukesh Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Prof. Usmani', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sweta Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "CSAT (Paper 2)",
                "subject_type" => "General Studies & CSAT"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Javed Haque', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'R. K. Verma', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "History",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Divyavadan Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Rajesh Bhadauria', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Sanjay Singh', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Shivanshu Saxena', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Geography",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vineet Anurag', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Political Science & IR",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Ojha', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Political Science & IR",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Vivek Bhardwaj', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Sociology",
                "subject_type" => "Optional Subjects"
            ],
            ['image' => 'database/seeders/temp_imgs_for_seeding/team/user-placeholder.jpeg',
                'en' => ["name" => 'Kanhaiya Pandey', "position" => 'Teacher'],
                "team_category_title" => [4],
                "subject" => "Hindi Literature",
                "subject_type" => "Optional Subjects"
            ],
        ];

        foreach ($teams_and_subject as $st) {
//            Getting the file name from a long sting
            $file_destination_as_array = explode("/", $st["image"]);
            $arrayCount = count($file_destination_as_array) - 1;
            $fileName = $file_destination_as_array[$arrayCount];

            $created_team = Team::whereTranslationLike("name", "%" . $st["en"]["name"] . "%")->get()

            if (!$created_team) {
                $created_team = Team::create([
                    'image' => $this->uploadImageSeeder($st["image"], $fileName),
                    'en' => ["name" => $st["en"]["name"], "description" => $st["en"]["description"] ?? "", "position" => $st["en"]["position"]],
                    'hi' => ["name" => $st["en"]["name"], "description" => $st["en"]["description"] ?? "", "position" => $st["en"]["position"]],
                ]);
            }
            $created_team->teamCategories()->attach($st["team_category_title"]);

        }
    }
}
