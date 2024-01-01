<?php

namespace Database\Seeders;

use App\Models\TeamCategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Achiever;
use App\Models\Center;
use App\Models\Post;
use App\Models\Seofield;
use App\Models\Team;
use Database\Factories\TeamFactory;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin123@admin.com',
             'password' => bcrypt('admin123'),
             'username' => 'admin123',
             'role' => 'super admin',
//             'status' => 'Active',
         ]); echo "Admin User seeded. \n\n";



        TeamCategory::insert([
            ['team_category' => 'Director',],
            ['team_category' => 'Advisory Board',],
            ['team_category' => 'Administrator',],
            ['team_category' => 'Faculty',],
            ['team_category' => 'Mock Interview Panelist',]
        ]); echo 'Team Category Seeded';


        $this->call([
            AchievementsSeeder::class,
            CentersSeeder::class,
            TeamSeeder::class,
            MenuLocationSeeder::class,
        ]);
    }
}
