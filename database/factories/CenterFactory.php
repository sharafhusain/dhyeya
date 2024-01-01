<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Center>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ctype = ["Face To Face","Live Stream"];
        $city = ['Lucknow', 'Delhi', 'Uttar Pradesh', 'Kolkata', 'Kanpur', 'Mumbai'];
        return [
            'image' => fake()->image('public/storage/media/', fullPath: false),
            'en' => ["title"=>fake()->company(),"address"=>fake()->address(), "city"=>$city[random_int(0,5)], "state"=>"India"],
            'hi' => ["title"=>fake()->company(),"address"=>fake()->address(), "city"=>$city[random_int(0,5)], "state"=>"India"],
            'email' => fake()->safeEmail(),
            "phone_number" => fake()->phoneNumber(),
            "center_type" => $ctype[random_int(0,1)],

        ];
    }
}
