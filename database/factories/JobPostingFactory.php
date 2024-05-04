<?php

namespace Database\Factories;

use App\Helpers\Helper;
use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobPostingFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = JobPosting::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        return [
            'name' => $name = $this->faker->sentence,
            'slug' => Helper::generateSlug($this->model, $name),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
