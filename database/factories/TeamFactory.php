<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->image('public/storage/media/', fullPath: false),
            'hi' => ["name"=>fake()->name(),"description"=>fake()->paragraph(2),"position"=>fake()->word()],
            'en' => ["name"=>fake()->name(),"description"=>fake()->paragraph(2),"position"=>fake()->word()],
        ];
    }
}
