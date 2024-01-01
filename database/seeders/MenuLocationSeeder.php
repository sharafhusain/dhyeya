<?php

namespace Database\Seeders;

use App\Models\MenuLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $menuName = [
            'Header About',
            'Header Course',
            'Header Test Series',
            'Header Student Zone',
            'Header Current Affair',
            'Header Download',
            'Footer Course',
            'Footer Student Zone',
            'Footer Current Affair',
            'Footer Download',
        ];

        foreach ($menuName as $mN){
            $menulocation = new MenuLocation();
            $menulocation->fill(['name'=>$mN])->save();
        }
    }

}
