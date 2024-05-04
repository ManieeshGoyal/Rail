<?php

namespace Database\Factories;

use App\Helpers\Helper;
use App\Models\Blog;
use App\Models\MediaLibrary;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        return [
            'title' => $title = $this->faker->sentence,
            'slug' => Helper::generateSlug($this->model, $title),
            'description' => $this->faker->paragraph(10),
            'media_library_id' => MediaLibrary::inRandomOrder()->first()->id,
            'status_id' => $this->faker->randomElement([
                1,
                2,
            ]),
        ];
    }
}
