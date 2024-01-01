<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CentersSeeder extends Seeder
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


        $centers = [
            [
                'en' => ["title" => 'Delhi (Mukherjee Nagar)', "address" => 'A 12, 13, Ansal Building, Dr. Mukherjee Nagar, Delhi - 110009', "city" => 'Delhi', "state" => "Delhi"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9205274741/42',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Delhi (Laxmi Nagar)', "address" => '1/53, 2nd floor, Lalita Park, Near Gurudwara, Opposite Pillar no.23, Laxmi Nagar, Delhi -110092', "city" => 'Delhi', "state" => "Delhi"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9205212500/9205962002',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Greater Noida)', "address" => '4th Floor Veera Tower, Alpha 1 Commercial Belt., Greater Noida, UP - 201310', "city" => 'Greater Noida', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9205336037/38',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Prayagraj)', "address" => 'II & III Floor, Shri Ram Tower, 17C, Sardar Patel Marg, Civil Lines, Prayagraj, UP - 211001', "city" => 'Prayagraj', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '0532-2260189/8853467068',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Lucknow "Aliganj")', "address" => 'A-12, Sector-J, Aliganj, Lucknow, UP- 226024', "city" => 'Lucknow', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9506256789/7570009002',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Lucknow "Gomti Nagar")', "address" => 'CP-1, Jeewan Plaza, Viram Khand-5, Near Husariya Chauraha, Gomti Nagar, Lucknow , UP - 226010', "city" => 'Lucknow', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '7234000501/ 7234000502',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Lucknow "Alambagh")', "address" => '58/1 , Sector-B Opposite Phoenix Mall Gate No. 3, L.D.A Colony , Alambagh Lucknow, UP - 226005', "city" => 'Lucknow', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '7518373333/8354933833',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Gorakhpur)', "address" => '2nd Floor Narayan Tower, Gandhi Gali,Golghar, Gorakhpur, UP - 273001', "city" => 'Gorakhpur', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '0551-2200385/7080847474',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Kanpur)', "address" => '113/154 Swaroop Nagar, Near HDFC Bank, Kanpur, UP - 208002', "city" => 'Kanpur', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '7887003962/7897003962',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Odisha (Bhubaneswar)', "address" => 'OEU Tower, Third Floor, KIIT Road, Patia, Bhubaneswar, Odisha - 751024', "city" => 'Bhubaneswar', "state" => "Odisha"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9818244644/7656949029',
                "center_type" => 'Face To Face',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Lucknow "Alambagh")', "address" => '58/1 , Sector-B Opposite Phoenix Mall Gate No. 3, L.D.A Colony , Alambagh Lucknow, UP - 226005', "city" => 'Lucknow', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '7518373333/8354933833',
                "center_type" => 'Live Stream',
            ],
            [
                'en' => ["title" => 'Uttar Pradesh (Moradabad)', "address" => 'ISS Edu, RAMGANGA VIHAR-II, Near R.S.D. Hospital, Moradabad, UP - 244001', "city" => 'Moradabad', "state" => "Uttar Pradesh"],
                'email' => 'mydesk@dhyeyaias.com',
                "phone_number" => '9837622221/9927622221/9837633331',
                "center_type" => 'Live Stream',
            ],
        ];


        foreach ($centers as $center) {
            Center::create([
                'image' => $this->uploadImageSeeder('database/seeders/temp_imgs_for_seeding/institute.png', 'institute.png'),
                'en' => ["title" => $center["en"]["title"], "address" => $center["en"]["address"], "city" => $center["en"]['city'], "state" => $center["en"]["state"]],
                'hi' => ["title" => $center["en"]["title"], "address" => $center["en"]["address"], "city" => $center["en"]['city'], "state" => $center["en"]["state"]],
                "email" => $center["email"],
                "phone_number" => $center["phone_number"],
                "center_type" => $center["center_type"]
            ]);
        }
    }
}
