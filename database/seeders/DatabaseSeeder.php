<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Candidate;
use App\Models\JobPosting;
use App\Models\MediaLibrary;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            StatusSeeder::class,
        ]);

        JobPosting::factory(10)->create();
        Candidate::factory(40)->create();
        BlogCategory::factory(20)->create();
        MediaLibrary::factory(30)->create();
        Blog::factory(30)->create()->each(function($blog) {
            $blog->blogCategories()->sync(BlogCategory::all()->random(rand(1, 5))->pluck('id'));
        });
    }
}
