<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LandmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'title' => Json_encode(fake()->name()),
          'slug' => Json_encode(fake()->name()),
          'type' => Json_encode(fake()->name()),
          'admin_id' => 1,
          'description' => Json_encode(fake()->paragraphs($nb = 3, $asText = false)),
          'langitude'=>fake()->latitude($min = -90, $max = 90),
          'latitude'=>fake()->longitude($min = -180, $max = 180),
          'area'=>fake()->numberBetween($min = 10, $max = 500),

          'register_year'=>fake()->dateTime($max = 'now', $timezone = null),
          'viwes'=>fake()->randomDigit(),
          'discovery_date'=>fake()->dateTime($max = 'now', $timezone = null),
          'is_published'=>true,
          'published_at'=>fake()->dateTime($max = 'now', $timezone = null),
          'published_by_id'=>1,



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
