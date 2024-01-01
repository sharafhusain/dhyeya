<?php

namespace Database\Seeders;

use App\Models\Achiever;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AchievementsSeeder extends Seeder
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
        $group = ["UPSC", "UP-PCS", "Others"];
        $year = [2021, 2022, 2023];

        $achievers = [
            [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/1_achievers.jpg",
                'en' => ["name" => "ARNAV MISHRA", "achievement" => "AIR 56"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/2_achievers.jpg",
                'en' => ["name" => "ZUFISHAN HAQUE", "achievement" => "AIR 193"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/3__achievers.jpg",
                'en' => ["name" => "RAJAT SINGH", "achievement" => "AIR 379"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/4__achievers.jpg",
                'en' => ["name" => "PANKKA VERMA", "achievement" => "AIR 515"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/5__achievers.jpg",
                'en' => ["name" => "ROHIT kARDAM", "achievement" => "AIR 517"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/6__achievers.jpg",
                'en' => ["name" => "ADARSH PATEL", "achievement" => "AIR 520"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/7__achievers.jpg",
                'en' => ["name" => "VIPIN DUBAY", "achievement" => "AIR 708"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/8__achievers.jpg",
                'en' => ["name" => "AYUSH AGRAWAL", "achievement" => "AIR 822"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/9__achievers.jpg",
                'en' => ["name" => "PRATIKSKA PANDEY", "achievement" => "RANK 2 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/10__achievers.jpg",
                'en' => ["name" => "AKANKSHA GUPTA", "achievement" => "RANK 4 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/11__achievers.jpg",
                'en' => ["name" => "SALTANAT PRAWEEN", "achievement" => "RANK 6 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/12__achievers.jpg",
                'en' => ["name" => "MOHSEENA BANO", "achievement" => "RANK 7 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/13__achievers.jpg",
                'en' => ["name" => "AISHWARYA DUBEY", "achievement" => "RANK 9 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/14__achievers.jpg",
                'en' => ["name" => "ALOK SINGH", "achievement" => "RANK 13 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/15__achievers.jpg",
                'en' => ["name" => "NIDHI PATEL", "achievement" => "RANK 15 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/16__achievers.jpg",
                'en' => ["name" => "YOGITA SINGH", "achievement" => "RANK 18 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/17__achievers.jpg",
                'en' => ["name" => "PRATIKSHA TRIPATHI", "achievement" => "RANK 20 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/18__achievers.jpg",
                'en' => ["name" => "JYOTI CHAURASIYA", "achievement" => "RANK 21 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/19__achievers.jpg",
                'en' => ["name" => "CHANDAN SINGH YADAV", "achievement" => "RANK 28 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/20__achievers.jpg",
                'en' => ["name" => "ANKIT VERMA", "achievement" => "RANK 29 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/21__achievers.jpg",
                'en' => ["name" => "ARTI SAHU", "achievement" => "RANK 30 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/22__achievers.jpg",
                'en' => ["name" => "PANKAJ KUMAR", "achievement" => "RANK 34 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/23__achievers.jpg",
                'en' => ["name" => "CHANDRA P. GAUTAM", "achievement" => "RANK 36 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/24__achievers.jpg",
                'en' => ["name" => "MANJUL MAYNAK", "achievement" => "RANK 37 (SDM)"],
                'type' => "achiever",
                "year" => 2022,
                "group" => "UP-PCS"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/25__achievers.jpg",
                'en' => ["name" => "ARPIT GUPTA", "achievement" => "AIR 54"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/26__achievers.jpg",
                'en' => ["name" => "NIKHIL MAHAJAN", "achievement" => "AIR 80"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/27__achievers.jpg",
                'en' => ["name" => "VIVEK TIWARI", "achievement" => "AIR 164"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/28__achievers.jpg",
                'en' => ["name" => "KARMVEER KESHAV", "achievement" => "AIR 170"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/29__achievers.jpg",
                'en' => ["name" => "ANAND KUMAR SINGH", "achievement" => "AIR 206"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ], [
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/30__achievers.jpg",
                'en' => ["name" => "SURYA MAN PATEL", "achievement" => "AIR 281"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/31__achievers.jpg",
                'en' => ["name" => "PREKSHA AGRAWAL", "achievement" => "AIR 303"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/32__achievers.jpg",
                'en' => ["name" => "ANURAG NAYAN", "achievement" => "AIR 379"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/33__achievers.jpg",
                'en' => ["name" => "CHAITANYA", "achievement" => "AIR 397"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/34__achievers.jpg",
                'en' => ["name" => "RAJENDRA CHAUDHARY", "achievement" => "AIR 514"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/35__achievers.jpg",
                'en' => ["name" => "RAVINDRA KUMAR MEENA", "achievement" => "AIR 576"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/36__achievers.jpg",
                'en' => ["name" => "GAGAN SINGH MEENA", "achievement" => "AIR 592"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],[
                'image' => "database/seeders/temp_imgs_for_seeding/achievers/37__achievers.jpg",
                'en' => ["name" => "RAJESH KUMAR MEENA", "achievement" => "AIR 622"],
                'type' => "achiever",
                "year" => 2021,
                "group" => "UPSC"
            ],
        ];


        foreach ($achievers as $achiever) {
//            Getting the file name from a long sting
            $file_destination_as_array = explode("/", $achiever["image"]);
            $arrayCount = count($file_destination_as_array) - 1;
            $fileName = $file_destination_as_array[$arrayCount];

            Achiever::create([
                'image' => $this->uploadImageSeeder($achiever["image"], $fileName),
                'hi' => ["name" => $achiever["en"]["name"], "achievement" => $achiever["en"]["achievement"]],
                'en' => ["name" => $achiever["en"]["name"], "achievement" => $achiever["en"]["achievement"]],
                'type' => "achiever",
                "year" => $achiever["year"],
                "group" => $achiever["group"]
            ]);
        }
    }
}
