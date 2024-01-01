<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achiever>
 */
class AchieverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $group = ["UPSC","JEE","MAINS","UPSSSC"];
        $year = [2021,2022,2023];
        return [
            'image' => fake()->image('public/storage/media/', fullPath: false),
            'hi' => ["name"=>fake()->name(),"achievement"=>fake()->paragraph(1)],
            'en' => ["name"=>fake()->name(),"achievement"=>fake()->paragraph(1)],
            'type' => "achiever",
            "year" => $year[random_int(0,2)],
            "group"=> $group[random_int(0,3)]
        ];
    }
}
