<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TeamSeeder extends Seeder
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

        $team_category = ['Director' => 1,
            'Advisory Board' => 2,
            'Administrator' => 3,
            'Faculty' => 4,
            'Mock Interview Panelist' => 5];

        $teams = [
            [
                'image' => 'database/seeders/temp_imgs_for_seeding/team/1_team.jpg',
                'en' => [
                    "name" => 'MR. VINAY SINGH',
                    "description" => '<p align="justify">The guiding philosophy of the institute, throughout, has been
creation of knowledge. The objectives of imparting education, combined with
creation, dissemination and application of knowledge, are being met in an
integrated form, to create a synergetic impact.</p>
<p align="justify">The institute fosters and nurtures leaders capable of making
difference in the management of corporate and non-sectors. It inculcates human
values and professional ethics in the students, which help them make decisions
and create path that are good not only for them, but also are good for the
society, for the nation, and for the world as whole. To fulfill its mission in
new and powerful ways, each student is motivated to strive to achieve excellence
in every endeavor by making continuous improvements in curricula and pedagogical
tools.</p>
<p align="justify">This great establishment stands tall on the foundation of an
excellent, committed and deeply knowledgeable faculty, innovative and unique
pedagogical tools and an eclectic and diverse student community that has a
burning desire to make new paths of its own.</p>',
                    "position" => 'Ceo and Founder'],
                "team_category_title" => [1,5]
            ], [
                'image' => 'database/seeders/temp_imgs_for_seeding/team/2_team.jpg',
                'en' => [
                    "name" => 'MR. Q H KHAN',
                    "description" => '<p align="justify">Dhyeya IAS is an institution that aims at the complete
development of the students and our faculty are hand-picked and qualified
greatly to ensure that the students are given every possible support in all
their academic endeavors. It is a multidisciplinary institution and this also
ensures that the students have ready access to a wide range of academic
material.</p>
<p align="justify">Our brand of education does not have narrow horizons, we
believe in exposure. Our students are encouraged to widen their knowledge base
and study beyond the confines of the syllabus.</p>',
                    "position" => 'Managing Director'
                ],
                "team_category_title" => [1,5]
            ], [
                'image' => 'database/seeders/temp_imgs_for_seeding/team/3_team.jpg',
                'en' => ["name" => 'Mr. N C Saxena', "position" => 'Ex. Secretary, Govt. of India'],
                "team_category_title" => [2]
            ], [
                'image' => 'database/seeders/temp_imgs_for_seeding/team/4_team.jpg',
                'en' => ["name" => 'Mr. Shashank', "position" => 'Ex. Foreign Secretary'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/5_team.jpg',
                'en' => ["name" => 'Mr. S Y Quraishi', "position" => 'Ex. Chief Election Commissioner'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/6_team.jpg',
                'en' => ["name" => 'Mr. Noor Mohammed', "position" => 'Ex. Secretary, Govt. of India'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/7_team.jpg',
                'en' => ["name" => 'Mr. Manjeet Singh', "position" => 'Ex. Secretary Home & Finance'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/8_team.jpg',
                'en' => ["name" => 'Mr. Vibhuti Narain Rai', "position" => 'Retd. IPS - Ex. DGP (UP)'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/9_team.jpg',
                'en' => ["name" => 'Mr. Vikram Singh', "position" => 'Retd. IPS - Ex. DGP (UP)'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/10_team.jpg',
                'en' => ["name" => 'Mr. A. H. K. Ghauri', "position" => 'Retd. IRS - Ex. Governance Advisor, British High Commission'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/11_team.jpg',
                'en' => ["name" => 'Mr. S K Mishra', "position" => 'Retd. IRS - Ex. Member Revenue Board, Ex. Member CBEC now CBIC'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/12_team.jpg',
                'en' => ["name" => 'Mr. T H K Ghauri', "position" => 'Retd. IRS - Ex. Chief Commissioner Custom & Excise'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/13_team.jpg',
                'en' => ["name" => 'Mr. Qamar Agha', "position" => 'Widely Acclaimed - Sr. Journalist'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/14_team.jpg',
                'en' => ["name" => 'Mr. Qurban Ali', "position" => 'Ex. Director - Rajya Sabha TV'],
                "team_category_title" => [2,5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/15_team.jpg',
                'en' => ["name" => 'Mr. S. N. Ali', "position" => 'Senior Journalist'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/16_team.jpg',
                'en' => ["name" => 'Mr. Gaurav Bansal', "position" => '(IRTS)'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/17_team.jpg',
                'en' => ["name" => 'Mr. Sunil Kumar Rai', "position" => 'IPS'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/18_team.jpg',
                'en' => ["name" => 'Mr. Saurabh Rao', "position" => 'IAS'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/19_team.jpg',
                'en' => ["name" => 'Mr. Harsh Vig', "position" => 'IT Consultant'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/20_team.jpg',
                'en' => ["name" => 'Mr. Arshi', "position" => 'IPS'],
                "team_category_title" => [2]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/21_team.jpg',
                'en' => ["name" => 'Vijay Pratap Singh', "position" => 'Centre Head - Lucknow'],
                "team_category_title" => [3]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/22_team.jpg',
                'en' => ["name" => 'Ved Prakash Rajput', "position" => 'Chief Co-Ordinating Officer'],
                "team_category_title" => [3]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/23_team.jpg',
                'en' => ["name" => 'Syed Munawwar Ali', "position" => 'Centre Head - Prayagraj'],
                "team_category_title" => [3]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/24_team.jpg',
                'en' => ["name" => 'Sanjeev Kumar Jha', "position" => 'Assistant General Manager'],
                "team_category_title" => [3]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/25_team.jpg',
                'en' => ["name" => 'MD A Usmani', "position" => 'Distinguished Professor'],
                "team_category_title" => [5]
            ],[
                'image' => 'database/seeders/temp_imgs_for_seeding/team/26_team.jpg',
                'en' => ["name" => 'Professor G Kumar', "position" => 'Distinguished Professor - Ex. UPSC Board Member'],
                "team_category_title" => [5]
            ], [
                'image' => 'database/seeders/temp_imgs_for_seeding/team/27_team.jpg',
                'en' => ["name" => 'Mr. Rai Singh', "position" => 'Retd. IAS - Ex. Chief Secretary U.P. Govt.'],
                "team_category_title" => [5]
            ],
        ];

        foreach ($teams as $team) {
//            Getting the file name from a long sting
            $file_destination_as_array = explode("/", $team["image"]);
            $arrayCount = count($file_destination_as_array) - 1;
            $fileName = $file_destination_as_array[$arrayCount];

            $created_team = Team::create([
                'image' => $this->uploadImageSeeder($team["image"], $fileName),
                'en' => ["name" => $team["en"]["name"], "description" => $team["en"]["description"]??"", "position" => $team["en"]["position"]],
                'hi' => ["name" => $team["en"]["name"], "description" => $team["en"]["description"]??"", "position" => $team["en"]["position"]],
            ]);
            $created_team->teamCategories()->sync($team["team_category_title"]);
        }
    }
}
