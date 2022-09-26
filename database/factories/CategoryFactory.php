<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>Json_encode(fake()->name()),
            'description' => Json_encode(fake()->paragraphs($nb = 3, $asText = false)),
            'icon' => fake()->imageUrl($width = 640, $height = 480),
            'category_id'=>1,
            'is_active' => true,


        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {

    }
}
