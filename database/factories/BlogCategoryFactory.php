<?php

namespace Database\Factories;

use App\Helpers\Helper;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCategoryFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = BlogCategory::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        return [
            'name' => $name = $this->faker->word,
            'slug' => Helper::generateSlug($this->model, $name),
        ];
    }
}
