<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Admin::factory(10)->create();
      \App\Models\Category::factory(10)->create();
      \App\Models\Article::factory(10)->create();
      \App\Models\Landmark::factory(10)->create();
    //   \App\Models\ArticleCategory::factory(10)->create();
    //   \App\Models\LandmarkLandmark::factory(10)->create();
    //   \App\Models\CategoryLandmark::factory(10)->create();
    //   \App\Models\ArticleLandmark::factory(10)->create();
      \App\Models\User::factory(10)->create();
      \App\Models\Favorit::factory(10)->create();
      \App\Models\Follow::factory(10)->create();




    }
}
