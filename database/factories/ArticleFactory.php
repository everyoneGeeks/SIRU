<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ArticleFactory extends Factory
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
            'slug' =>Json_encode( fake()->name()),
            'description' =>Json_encode(fake()->text($maxNbChars = 200)),
            'admin_id' => fake()->numberBetween($min = 1, $max = 10),
            'is_published' => true,
            'published_by_id'=>fake()->numberBetween($min = 1, $max = 10),
            'published_at'=>fake()->dateTime($max = 'now', $timezone = null),
            'viwes'=>fake()->randomDigit()


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
