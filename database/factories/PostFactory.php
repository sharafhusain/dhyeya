<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ["active","inactive"];
        $post_type = [
            'post',
            'child-of-daily-current-affairs',
                    'child-of-Info-paedia',
                    'child-of-brain-booster'
        ];
            return [
                'image' => fake()->image('public/storage/media/', fullPath: false),
                'hi' => ["title"=>fake()->company(),"description"=>fake()->paragraph(5)],
                'en' => ["title"=>fake()->company(),"description"=>fake()->paragraph(5)],
                "status" => $status[random_int(0,1)],
                "slug" => fake()->slug(),
                "post_type" => "post",
                "user_id" => 1,
            ];
    }
}
